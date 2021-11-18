<?php

namespace App\Http\Livewire\Subject;

use Livewire\Component;
use App\Models\Subject;
use Livewire\WithPagination;
class Subjects extends Component {

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];
    public $search;

    protected $queryString = ['search'];

    public function render(){
        
        $subjects = Subject::where('name', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);

        return view('livewire.subject.subjects',['subjects' => $subjects]);
    }
} 
