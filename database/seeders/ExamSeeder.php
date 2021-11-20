<?php

namespace Database\Seeders;
use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //id 1
        $exam = new Exam();
        $exam->name = 'امتاحان شهر اول';
        $exam->save();

        //id 2
        $exam = new Exam();
        $exam->name = 'امتاحان شهر ثاني';
        $exam->save();

        //id 3
        $exam = new Exam();
        $exam->name = 'امتحان نهائي كورس اول';
        $exam->save();

        //id 3
        $exam = new Exam();
        $exam->name = 'امتحان نهائي ثاني اول';
        $exam->save();
    }
}
