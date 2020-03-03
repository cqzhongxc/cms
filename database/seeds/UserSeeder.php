<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(\App\User::class, 50)->create();
        $user = $users[0];
        $user->name = '晓川大哥';
        $user->email = "1028504601@qq.com";
        $user->save();
    }
}
