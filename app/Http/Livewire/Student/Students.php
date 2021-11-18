<?php

namespace App\Http\Livewire\Student;
use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    protected $listeners = ['$refresh'];

    public function render(){
        
        $students = Student::get();

        return view('livewire.student.students',[
            "students" => $students,
        ]);
    }
}
