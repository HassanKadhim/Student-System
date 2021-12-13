<?php

namespace App\Http\Livewire\Stage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Stage;
use Livewire\Component;
use Livewire\WithPagination;

class Stages extends Component {
    
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh' , 'deleteStage'];
    protected $queryString = ['search'];
    public $search , $ID;

    public function deleteConfirmed($id){
        $this->ID = $id;
        $this->confirm('هل انت متأكد؟', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => "true",
            'cancelButtonText' => "كلا",
            'confirmButtonText' =>  'نعم', 
            'onConfirmed' => 'deleteStage',
        ]);
    }

    public function deleteStage(){
        $id = $this->ID;
        Stage::find($id)->delete();
        $this->alert(
            'success',
            'تم الحذف بنجاح'
        );

        $this->emitTo('', '$refresh');
    }


    public function render(){

        $stages = Stage::where('name', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);

        return view('livewire.stage.stages',['stages'=> $stages]);
    }
}
