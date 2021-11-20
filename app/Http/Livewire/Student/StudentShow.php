<?php

namespace App\Http\Livewire\Student;
use App\Models\Student;
use Livewire\Component;

class StudentShow extends Component {

    protected $listeners = ['$refresh' , 'getStudentID' ];
    public $ID;
    public $student;

    public function getStudentID($id){
        $this->ID = $id;
        $this->student = Student::find($this->ID);
    }

    public function render() {
        return view('livewire.student.student-show');
    }
}
