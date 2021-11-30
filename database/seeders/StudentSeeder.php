<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        // id:1
        $student = new Student();
        
        $student->user_id = 2;
        $student->stage_id = 4;
        $student->mother_name = 'اسم الام';
        $student->city = 'بصرة';
        $student->district = 'ابي الخصيب';
        $student->phoneNumber = '07710000000';
        $student->card_number = '20181923';
        $student->gender = 'ذكر';
        $student->birthday = '1999/1/1';
        $student->type = '3';

        $student->save();

        
        // id:2
        $student = new Student();
        
        $student->user_id = 3;
        $student->stage_id = 8;
        $student->mother_name = 'اسم الام';
        $student->city = 'بصرة';
        $student->district = 'ابي الخصيب';
        $student->phoneNumber = '07710000000';
        $student->card_number = '20189043';
        $student->gender = 'ذكر';
        $student->birthday = '1990/1/1';
        $student->type = '1';

        $student->save();

        // id:3
        $student = new Student();
        
        $student->user_id = 4;
        $student->stage_id = 8;
        $student->mother_name = 'اسم الام';
        $student->city = 'بصرة';
        $student->district = 'شط العرب';
        $student->phoneNumber = '07719562315';
        $student->card_number = '20189043';
        $student->gender = 'ذكر';
        $student->birthday = '1990/9/8';
        $student->type = '3';

        $student->save();
    }
}
