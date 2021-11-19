<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Timesheet;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //id 1
        $time = new Timesheet();
        $time->student_id = 1;
        $time->subject_id = 3;
        $time->date = now();

        $time->save();



        //id 2
        $time = new Timesheet();
        $time->student_id = 2;
        $time->subject_id = 6;
        $time->date = now();

        $time->save();
        
    }
}
