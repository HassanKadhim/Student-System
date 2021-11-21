<?php

namespace App\Http\Livewire\Student;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;


class Students extends Component {

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];
    public $search;

    protected $queryString = ['search'];

    public function getStudentID($id){
        $this->emit('getStudentID' , $id);
    }

    public function render(){
        $search = '%'.$this->search.'%';
        $students = Student::whereHas('user' , function($query) use($search){
            $query->where('name' , 'LIKE' , $search);
            })->orderByDesc('id')->paginate(6);

        return view('livewire.student.students',[ "students" => $students ]);
    }
}
