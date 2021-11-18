<?php

namespace App\Http\Livewire\Stage;
use App\Models\Stage;
use Livewire\Component;

class Stages extends Component
{
    public function render(){
        $stages = Stage::get();
        return view('livewire.stage.stages',[
            'stages'=> $stages
        ]);
    }
}
