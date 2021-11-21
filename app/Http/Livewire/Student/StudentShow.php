<?php

namespace App\Http\Livewire\Student;
use App\Models\Student;
use App\Models\notification;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentShow extends Component {

    use  LivewireAlert;
    protected $listeners = ['$refresh' , 'getStudentID' ];
    
    public $ID , $student , $title , $body ;

    public function getStudentID($id){
        $this->ID = $id;
        $this->student = Student::find($this->ID);
    }
    protected $rules = [
        'title' => 'required',
        'body' => 'required',
    ];

    public function submit() {
        $this->validate();

        notification::create([
            'title' => $this->title,
            'body' => $this->body,
            'student_id' => $this->ID,
        ]);

        $this->alert('success', 'تم ',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);
    }

    

    public function render() {
        return view('livewire.student.student-show');
    }
}