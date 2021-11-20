<?php

namespace App\Http\Livewire\Exam;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Exam;

class Exams extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];
    public $search;

    protected $queryString = ['search'];

    public function render() {
        $exams = Exam::where('name', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);
        return view('livewire.exam.exams', ['exams'=> $exams]);
    }
}
