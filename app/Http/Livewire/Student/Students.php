<?php

namespace App\Http\Livewire\Student;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Student;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class Students extends Component {

    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh' , 'deleteStudent'];
    public $search , $ID;

    protected $queryString = ['search'];

    public function getStudentID($id){
        $this->emit('getStudentID' , $id);
    }

    public function deleteConfirmed($id){
        $this->ID = $id;
        $this->confirm('هل انت متأكد؟', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => "true",
            'cancelButtonText' => "كلا",
            'confirmButtonText' =>  'نعم', 
            'onConfirmed' => 'deleteStudent',
        ]);
    }

    public function deleteStudent(){
        $id = $this->ID;
        
        $student = Student::find($id);
        User::find($student->user->id)->delete();
        $this->alert(
            'success',
            'تم الحذف بنجاح'
        );

        $this->emitTo('student.students', '$refresh');
    }

    public function render(){
        $search = '%'.$this->search.'%';
        $students = Student::whereHas('user' , function($query) use($search){
            $query->where('name' , 'LIKE' , $search);
        })->whereHas('user' , function($query){
            $query->where('type' , 'student');
        })->orderByDesc('id')->paginate(6);

        return view('livewire.student.students',[ "students" => $students ]);
    }
}
