<?php

namespace App\Repositories;

use App\Applicat;
use App\Events\NewApplyEvent;

class ApplicatRepository
{
    use BaseRepository;

    protected $model;

    public function __construct(Applicat $applicat) {
        $this->model = $applicat;
    }

    /**
     * Get number of the records
     *
     * @param  int $number
     * @param  string $sort
     * @param  string $sortColumn
     * @return Paginate
     */
    public function page($number = 10, $condition = 'role_id', $sort = 'desc', $sortColumn = 'created_at')
    {
        //获取当前登录的用户角色
        $roles = \Auth::user()->roles;
        $roleId = [];
        //遍历角色获取每一个角色对应的申请类型
        $applicats = [];
        if($condition == 'role_id') {
          //获取拥有的角色id组
          foreach($roles as $role) {
              $roleId[] = $role->id;
          }
          $applicats = $this->model
                      ->whereIn('role_id', $roleId)
                       ->whereNotIn('status',['已取消','已结束','审核不通过'])
                        ->with('user', 'mechanism', 'type', 'opinions')
                          ->orderBy($sortColumn, $sort)
                            ->paginate($number);
        }

        if($condition == 'type_id') {
            foreach($roles as $role) {
                $types = $role->types;
                foreach($types as $type) {
                    $typeId[] = $type->id;
                }
            }
            $applicats = $this->model
                        ->withTrashed()
                        ->whereIn('type_id', array_unique($typeId))
                        ->with('user', 'mechanism', 'type', 'opinions')
                          ->orderBy($sortColumn, $sort)
                            ->paginate($number);
        }

        return $applicats;
    }

    /**
     * 获取自己的申请
     * @param  intrger  $user_id
     * @param  integer $number
     * @param  string  $sort
     * @param  string  $sortColumn
     * @return
     */
    public function getByUserId($user_id, $number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        return $this->model->where('user_id',$user_id)
                  ->with('user', 'mechanism', 'type')
                    ->orderBy($sortColumn, $sort)
                      ->paginate($number);
    }

    /**
     * 通过类型查找申请
     * @param  int  $type_id
     * @param  Request $request
     * @return array
     */
    public function getByType($type_id)
    {
        return $this->model->where('type_id', $type_id)
                    ->whereIn('status',['审核通过','进行中'])
                      ->get();
    }

    public function getFulfillNumber()
    {
        return $this->model->where('status','审核通过')->count();
    }

    /**
     * all type
     *
     * @return Eloquent
     */
    public function all()
    {
        return $this->model->get();
    }

    /**
     * 新建申请
     * @param  array
     * @return interger
     */
    public function store($input)
    {
        //判断当前结构是否是自定义，如果是则在机构表中新建
        if(!is_numeric($input['mechanism_id'])){
            //插入并返回自增id值
            $input['mechanism_id'] = \DB::table('mechanisms')->insertGetId(
                ['name' => $input['mechanism_id']]
            );
        }
        //判断是否需要物资
        if(!$input['unite']) {
            $input['agency'] = '';
        }

        $input['files'] = json_encode(array_pluck($input['fileList'],'response'));
        $input['user_id'] = \Auth::user()->id;
        $applicat = $this->save($this->model, $input);
        event(new NewApplyEvent());
        return $applicat;
    }

    /**
     * 转发
     * @param  int $id
     * @param  array $input
     * @return [type]
     */
    public function forward(Applicat $applicat, $input)
    {
        $applicat->role_id = $input['role_id'];
        $applicat->stage = null;
        return $applicat->save();
    }

    public function getById($id)
    {
        return $this->model->withTrashed()->findOrFail($id);
    }
}
