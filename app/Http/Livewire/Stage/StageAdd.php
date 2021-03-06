<?php

namespace App\Http\Livewire\Stage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Stage;
class StageAdd extends Component {

    use  LivewireAlert;
    public $name ;
    
    protected $rules = [
        'name' => 'required',
        
    ];

    public function submit() {
        $this->validate();

        Stage::create([
            'name'     => $this->name,
        ]);

        $this->alert('success', 'تم إضافة المرحلة بنجاح',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);

        $this->emitTo('stage.stages', '$refresh');
    }

    public function render() {
        return view('livewire.stage.stage-add');
    }
}
