<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $user=[
           [
            'id'=> 1,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'role_id'=>'0',
            'password'=>Hash::make('admin')

           ],
           [
            'id'=> 2,
            'name'=>'Admin1',
            'email'=>'admin1@gmail.com',
            'role_id'=>'0',
            'password'=>Hash::make('admin1')

           ],
           [
            'id'=> 3,
            'name'=>'Admin2',
            'email'=>'admin2@gmail.com',
            'role_id'=>'0',
            'password'=>Hash::make('admin2')

           ],
           [
            'id'=> 4,
            'name'=>'OBAORIN IL-Yassine',
            'email'=>'yassine@gmail.com',
            'role_id'=>'1',
            'password'=>Hash::make('admin2')

           ],


        ];
        User::insert($user);
    }
}
