<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(\App\Admin::class, 20)->create();
        $user = $users[0];
        $user->name='admin';
        $user->nickname='晓川帅哥';
        $user->save();

        \Spatie\Permission\Models\Role::create([
            'title'=>'管理员',
            'name'=>'admin',
            'guard_name'=>'admin'
        ]);

        $user->assignRole('admin');
    }
}
