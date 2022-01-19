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
        $user->type = "admin";

        $user->save();


        // id:1
        $user = new User();

        $user->name = 'Teacher';
        $user->email = 'teacher@is.com';
        $user->password = Hash::make('123456');
        $user->type = "teacher";

        $user->save();


        // id:2
        $user = new User();

        $user->name = 'حسن كاظم';
        $user->email = 'HassanKadhim@gmail.com';
        $user->profile_photo_path = 'student/img/2sLHTRZ4D-1639678739.jpg';
        $user->password = Hash::make('123456');


        $user->save();

        // id:3
        $user = new User();

        $user->name = 'حسين خالد';
        $user->email = 'brucewaynbat@gmail.com';
        $user->password = Hash::make('123456');


        $user->save();

        // id:4
        $user = new User();

        $user->name = 'حسن حازم';
        $user->email = 'HassanHazem@gmail.com';
        $user->password = Hash::make('123456');


        $user->save();

        // id:6
        $user = new User();

        $user->name = 'زينب حميد مجيد';
        $user->email = 'alfayez.zainab@gmail.com';
        $user->password = Hash::make('123456');


        $user->save();
    }
}
