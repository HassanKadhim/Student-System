<?php

namespace Database\Seeders;
use App\Models\Notification;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        // id 1
        $notfication = new Notification();
        $notfication->student_id = 1;
        $notfication->title ='يرجا مراجعت استاذ مادة  الجافا';
        $notfication->body ='يرجا مراجعت استاذ مادة الجافا';
        $notfication->save() ;

        // id 2
        $notfication = new Notification();
        $notfication->student_id = 1;
        $notfication->title ='تنيه في مادة الجافا';
        $notfication->body =' تنيه في مادة الجافا ';
        $notfication->color ='0xfff6be32';
        $notfication->save() ;

        // id 3
        $notfication = new Notification();
        $notfication->student_id = 1;
        $notfication->title ='انذار في مادة الجافا';
        $notfication->body ='انذار في مادة الجافا';
        $notfication->color ='0xfffa3838';
        $notfication->save() ;

    }
}
