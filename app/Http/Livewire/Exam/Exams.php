<?php

namespace App\Http\Livewire\Exam;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Exam;

class Exams extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh' , 'deleteExam'];
    public $search , $ID;

    protected $queryString = ['search'];

    public function deleteConfirmed($id){
        $this->ID = $id;
        $this->confirm('هل انت متأكد؟', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => "true",
            'cancelButtonText' => "كلا",
            'confirmButtonText' =>  'نعم', 
            'onConfirmed' => 'deleteExam',
        ]);
    }

    public function deleteExam(){
        $id = $this->ID;
        Exam::find($id)->delete();
        $this->alert(
            'success',
            'تم الحذف بنجاح'
        );

        $this->emitTo('exam.exams', '$refresh');
    }

    public function render() {
        $exams = Exam::where('name', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);
        return view('livewire.exam.exams', ['exams'=> $exams]);
    }
}
