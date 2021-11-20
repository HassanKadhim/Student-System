<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //id 1
        $subject = new Subject();
        $subject->stage_id = 1;
        $subject->name = 'Programing 1';

        $subject->save();

        //id 2
        $subject = new Subject();
        $subject->stage_id = 2;
        $subject->name = 'OOP Java';

        $subject->save();

        //id 3
        $subject = new Subject();
        $subject->stage_id = 3;
        $subject->name = 'Web';

        $subject->save();

        //id 4
        $subject = new Subject();
        $subject->stage_id = 4;
        $subject->name = 'Python';

        $subject->save();

        //id 5
        $subject = new Subject();
        $subject->stage_id = 5;
        $subject->name = 'System analysis';

        $subject->save();

        //id 6
        $subject = new Subject();
        $subject->stage_id = 6;
        $subject->name = 'PHP';

        $subject->save();

        //id 7
        $subject = new Subject();
        $subject->stage_id = 7;
        $subject->name = 'software engineering';

        $subject->save();

        //id 8
        $subject = new Subject();
        $subject->stage_id = 8;
        $subject->name = 'Flutter';

        $subject->save();
    }
}
