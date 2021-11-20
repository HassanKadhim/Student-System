<?php

namespace App\Http\Livewire\Exam;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Exam;

class ExamAdd extends Component
{
    use  LivewireAlert;
    public $name ;
    
    protected $rules = [
        'name' => 'required',
    ];

    public function submit() {
        $this->validate();

        Exam::create([
            'name' => $this->name,
        ]);

        $this->alert('success', 'تم إضافة الامتحان بنجاح',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);

        $this->emitTo('stage.stages', '$refresh');
    }
    public function render() {
        return view('livewire.exam.exam-add');
    }
}
