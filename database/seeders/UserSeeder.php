<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // id:1
        $user = new User();

        $user->name = 'Administrator';
        $user->email = 'admin@is.com';
        $user->password = Hash::make('123456');

        $user->save();

    }
}
