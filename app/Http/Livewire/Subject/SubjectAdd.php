<?php

namespace App\Http\Livewire\Subject;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Stage;
use App\Models\Subject;


class SubjectAdd extends Component {

    use  LivewireAlert;
    public $name , $stage_id;
    
    protected $rules = [
        'name' => 'required',
        
    ];

    public function submit() {
        $this->validate();

        Subject::create([
            'name'     => $this->name,
            'stage_id'    => $this->stage_id,
        ]);

        $this->alert('success', 'تم إضافة المادة بنجاح',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);

        $this->emitTo('student.students', '$refresh');

    }



    public function render(){
        $stages = Stage::get();
        return view('livewire.subject.subject-add',[
            'stages'=> $stages
        ]);
    }
}
