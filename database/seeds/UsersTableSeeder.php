<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('password')
        ]);

        $author  = User::create([
            'name'=>'Author',
            'email'=>'author@author.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('password')
        ]);

        $user = User::create([
            'name'=>'User',
            'email'=>'user@user.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
