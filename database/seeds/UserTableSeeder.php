<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $admin = User::create([
            'firstname'=> 'Admin',
            'lastname'=> 'Admin',
            'role'=>'admin',
            'email' => 'admin@gmail.com',
            'address' => 'abc',
            'phonenumber'=> 232313,
            'image'=>'user1.png',
            'password' => bcrypt('admin')
        ]);

        $vendor = User::create([
            'firstname' => 'Vendor',
            'lastname' => 'Vendor',
            'role'=>'vendor',
            'email' => 'vendor@gmail.com',
            'address' => 'abcdef',
            'phonenumber'=> 25332313,
            'image'=>'user2.png',
            'password' => bcrypt('vendor')
        ]);
        $vendor = User::create([
            'firstname' => 'Vendor1',
            'lastname' => 'Vendor1',
            'role'=>'vendor',
            'email' => 'vendor1@gmail.com',
            'password' => bcrypt('vendor1'),
            'image'=>'user3.png',
            'address' => 'abcdsdsef',
            'phonenumber'=> 25332313
        ]);

        $vendor = User::create([
            'firstname' => 'Vendor2',
            'lastname' => 'Vendor2',
            'role'=>'vendor',
            'address' => 'def',
            'phonenumber'=> 232313,
            'email' => 'vendor2@gmail.com',
            'image'=>'user1.png',
            'password' => bcrypt('vendor2')
        ]);
        $vendor = User::create([
            'firstname' => 'Vendor3',
            'lastname' => 'Vendor3',
            'role'=>'vendor',
            'address' => 'abcvdef',
            'phonenumber'=> 253309013,
            'email' => 'vendor3@gmail.com',
            'image'=>'user3.png',
            'password' => bcrypt('vendor3')
        ]);
        $vendor = User::create([
            'firstname' => 'Vendor4',
            'lastname' => 'Vendor4',
            'role'=>'vendor',
            'address' => 'abcdefsdfdf',
            'phonenumber'=> 253328,
            'email' => 'vendor4@gmail.com',
            'image'=>'user1.png',
            'password' => bcrypt('vendor4')
        ]);
        $user = User::create([
            'firstname' => 'User',
            'lastname' => 'User',
            'role'=>'user',
            'address' => 'adef',
            'phonenumber'=> 25333,
            'email' => 'user@gmail.com',
            'image'=>'user4.png',
            'password' => bcrypt('user')
        ]);
        $user = User::create([
            'firstname' => 'User2',
            'lastname' => 'User2',
            'role'=>'user',
            'address' => 'adedssf',
            'phonenumber'=> 25333453,
            'email' => 'user2@gmail.com',
            'image'=>'user1.png',
            'password' => bcrypt('user2')
        ]);
        $user = User::create([
            'firstname' => 'User3',
            'lastname' => 'User3',
            'role'=>'user',
            'address' => 'adefdfdf',
            'phonenumber'=> 253334545,
            'email' => 'user3@gmail.com',
            'image'=>'user5.png',
            'password' => bcrypt('user3')
        ]);
    }
}
