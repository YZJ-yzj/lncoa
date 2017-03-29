<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = '使用者'; // optional
        $owner->description  = '这个是描述'; // optional
        $owner->save();
        $user = User::where('name','邓康发')->first();
        $user->attachRole($owner);

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = '超级管理员'; // optional
        $admin->description  = '这个是描述'; // optional
        $admin->save();
        $user = User::where('name','admin')->first();
        $user->attachRole($admin);

        factory(Role::class, 10)->create();
    }
}