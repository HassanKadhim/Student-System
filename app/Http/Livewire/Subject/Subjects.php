<?php

namespace App\Http\Livewire\Subject;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Subject;
use Livewire\WithPagination;
class Subjects extends Component {

    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh' , 'deleteSubject'];
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
            'onConfirmed' => 'deleteSubject',
        ]);
    }

    public function deleteSubject(){
        $id = $this->ID;
        Subject::find($id)->delete();
        $this->alert(
            'success',
            'تم الحذف بنجاح'
        );

        $this->emitTo('', '$refresh');
    }

    public function render(){
        
        $subjects = Subject::where('name', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);

        return view('livewire.subject.subjects',['subjects' => $subjects]);
    }
} 
