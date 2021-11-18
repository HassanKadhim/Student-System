<?php

namespace App\Http\Livewire\Subject;

use Livewire\Component;
use App\Models\Subject;

class Subjects extends Component {

    public function render(){
        $subjects = Subject::get();
        return view('livewire.subject.subjects',[
            'subjects' => $subjects,
        ]);
    }
}
