<?php

namespace App\Http\Livewire\Stage;
use App\Models\Stage;
use Livewire\Component;
use Livewire\WithPagination;

class Stages extends Component {
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];
    protected $queryString = ['search'];
    public $search;


    public function render(){

        $stages = Stage::where('name', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);

        return view('livewire.stage.stages',['stages'=> $stages]);
    }
}
