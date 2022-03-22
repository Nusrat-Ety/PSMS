<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::create ([
            'name'=>'admin',
            'slug'=>'log in of Admin',

        ]);
    

   
   
        User::create(
            [
             
             'role_id'=>$role->id,
             'name'=>'Maliha',
             'email'=>'admin@gmail.com',
             'password'=>bcrypt('123'),
            ]
            );
    }


    // public function run()
    // {
    //     Role::create(
    //         [
    //          'name'=>'user',
    //          'slug'=>'user',
    //          'status'=>'active',
    //         ]
    //         );
    // }
}
