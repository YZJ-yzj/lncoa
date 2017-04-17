<?php

namespace App;

use App\Scopes\StatusScope;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable, EntrustUserTrait, HasApiTokens;

    const STATUS_NORMAL = 1;

    /**
     * 需要被转换成日期的属性(软删除)
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nickname', 'avatar',
        'mobile', 'status', 'description', 'email_notify_enabled',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'pivot'
    ];

    /**
     * 额外添加属性 role_names为用户角色显示名称
     * @var array
     */
    // protected $appends = ['roles'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new StatusScope());
        static::creating(function ($user){
          $user->activation_token = str_random(30);
          $identicon = new \Identicon\Identicon();
          $user->avatar = $identicon->getImageDataUri($user->name,80);
        });
    }

    public function hasMenu($menu)
    {
        $roles = $this->roles();
        foreach($roles as $role) {
          if($role->menus()->get()->contains($menu))
            return true;
        }
        return false;
    }

    public function roles()
    {
        return $this->belongsToMany(
          config('entrust.role'),
           config('entrust.role_user_table'),
            config('entrust.user_foreign_key'),
             config('entrust.role_foreign_key')
              )->withTimestamps();
    }

    /**
     * Get the avatar and return the default avatar if the avatar is null.
     *
     * @param string $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        return isset($value) ? $value : config('lnc.default_avatar');
    }

    /**
     * 用于加密密码
     * @param [type] $password [description]
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function findForPassport($username)
    {
        return $this->where('email',$username)->first();
    }

    public function scopeNormal($query)
    {
        return $query->where('status',self::STATUS_NORMAL);
    }
}
