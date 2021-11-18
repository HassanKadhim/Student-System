<?php

namespace Database\Seeders;
use App\Models\Stage;

use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    
    public function run(){
        //id 1
        $stage = new Stage();
        $stage->name = 'اولى - نظم';
        $stage->save();
        //id 2
        $stage = new Stage();
        $stage->name = 'ثانية - نظم';
        $stage->save();
        //id 3
        $stage = new Stage();
        $stage->name = 'ثالثة - نظم';
        $stage->save();
        //id 4
        $stage = new Stage();
        $stage->name = 'رابعة - نظم';
        $stage->save();

        //id 5
        $stage = new Stage();
        $stage->name = 'اولى - حاسوب';
        $stage->save();
        //id 6
        $stage = new Stage();
        $stage->name = 'ثانية - حاسوب';
        $stage->save();
        //id 7
        $stage = new Stage();
        $stage->name = 'ثالثة - حاسوب';
        $stage->save();
        //id 8
        $stage = new Stage();
        $stage->name = 'رابعة - حاسوب';
        $stage->save();


        
    }
}
