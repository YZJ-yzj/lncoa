<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Services\FileManager\UploadManager;
use Illuminate\Http\Request;

class UploadController extends ApiController
{
    protected $manager;

    public function __construct(UploadManager $manager)
    {
        parent::__construct();

        $this->manager = $manager;

    }

    /**
     * Response the folder info.
     *
     * @param  Request $request
     * @return array
     */
    public function index(Request $request)
    {
        $data = $this->manager->folderInfo($request->get('folder'));

        return $this->respondWithArray([ 'data' => $data ]);
    }

    /**
     * Upload the file.
     *
     * @param  Request $request
     * @return array
     */
    public function uploadFile(Request $request)
    {
        //获取文件
        $file = $_FILES['file'];

        //获取文件名
        $fileName = $request->get('name');

        //如果用户提供了文件名称，则在其提供的名称的基础上添加上文件类型。
        $fileName = $fileName ? $fileName.'.'.explode('/', $file['type'])[1] : $file['name'];

        $path = str_finish($request->get('folder'), '/').$fileName;

        $content = \File::get($file['tmp_name']);

        if ($this->manager->checkFile($path)) {
            return $this->errorWrongArgs('This File exists.');
        }

        $this->manager->saveFile($path, $content);

        return $this->respondWithArray($this->manager->fileDetail($path));
    }

    /**
     * Upload file by the path.
     *
     * @param  Request $request
     * @return array
     */
    public function uploadFileByPath(Request $request)
    {
        $path = $request->file('image')->store($request->get('path'));

        $this->link->updateColumn($request->get('id'), ['image' => '/uploads/' . $path]);

        return $this->respondWithArray($this->manager->fileDetail($path));
    }

    /**
     * Create the folder.
     *
     * @param  Request $request
     * @return array
     */
    public function createFolder(Request $request)
    {
        $folder = $request->get('folder');

        $data = $this->manager->createFolder($folder);

        return $this->respondWithArray([ 'data' => $data ]);
    }

    /**
     * Delete the folder.
     *
     * @param  Request $request
     * @return array
     */
    public function deleteFolder(Request $request)
    {
        $del_folder = $request->get('del_folder');

        $folder = $request->get('folder') . '/' . $del_folder;

        $data = $this->manager->deleteFolder($folder);

        return $this->respondWithArray([ 'data' => $data ]);
    }

    /**
     * Delete the file.
     *
     * @param  Request $request
     * @return array
     */
    public function deleteFile(Request $request)
    {
        $path = $request->get('path');

        $data = $this->manager->deleteFile($path);

        return $this->respondWithArray([ 'data' => $data ]);
    }
}
