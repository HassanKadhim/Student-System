<?php

namespace App\Http\Livewire\TimeSheet;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Timesheet;
use Livewire\Component;

class TimeSheetAdd extends Component {

    use  LivewireAlert;
    public $date , $student_id , $subject_id;
    
    protected $rules = [
        'date' => 'required',
    ];

    public function submit() {
        $this->validate();

        Timesheet::create([
            'date'     => $this->date,
            'student_id' => $this->student_id,
            'subject_id' => $this->subject_id,
        ]);

        $this->alert('success', 'تم',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);

        $this->emitTo('time-sheet.times-sheet', '$refresh');

    }

    public function render() {
        $students = Student::get();
        $subjects = Subject::get();
        return view('livewire.time-sheet.time-sheet-add',[ "students" => $students, 'subjects' => $subjects ]);
    }
}
