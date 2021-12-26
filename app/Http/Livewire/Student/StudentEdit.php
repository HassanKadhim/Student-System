<?php

namespace App\Http\Livewire\Student;
use App\Models\Stage;
use App\Models\Student;
use Livewire\Component;

class StudentEdit extends Component {

    protected $listeners = ['getStudentID'];

    public $student, $name , $mother_name , $email , $city ,$phoneNumber , $card_number , $district , $type , $birthday , $gender , $stage_id , $image;
    
    public function getStudentID($id) {
        $this->stusent = Student::find($id);
        $this->name = $this->stusent->user->name;
        $this->mother_name = $this->stusent->mother_name;
        $this->email = $this->stusent->user->email;
        $this->city = $this->stusent->city;
        $this->phoneNumber = $this->stusent->phoneNumber;
        $this->card_number = $this->stusent->card_number;
        $this->district = $this->stusent->district;
        $this->birthday = $this->stusent->birthday;
        $this->gender = $this->stusent->gender;
        $this->type = $this->stusent->type;
        $this->stage_id = $this->stusent->stage_id;
    }
    
    public function edit() {
        
    }

    public function render() {
        $stages = Stage::get();
        return view('livewire.student.student-edit', [ 'stages' => $stages ] );
    }
}
