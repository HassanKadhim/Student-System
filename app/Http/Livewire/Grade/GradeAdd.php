<?php

namespace App\Http\Livewire\Grade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Student;
use App\Models\Exam;
use App\Models\Grade;
use App\Models\Subject;
use Livewire\Component;


class GradeAdd extends Component {

    use  LivewireAlert;
    public $grade , $exam_id , $student_id , $subject_id;
    
    protected $rules = [
        'grade' => 'required',
        'exam_id' => 'required',
        'student_id' => 'required',
        'subject_id' => 'required',
    ];

    public function submit() {
        $this->validate();

        Grade::create([
            'grade'     => $this->grade,
            'exam_id'     => $this->exam_id,
            'student_id'     => $this->student_id,
            'subject_id'     => $this->subject_id,
        ]);

        $this->alert('success', 'تم إضافة الدرجة بنجاح',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);

        $this->emitTo('stage.stages', '$refresh');
    }

    public function render() {
        $students = Student::get();
        $exams = Exam::get();
        $subjects = Subject::get();
        return view('livewire.grade.grade-add',['students' => $students , 'exams'=> $exams,'subjects' =>$subjects ]);
    }
}
