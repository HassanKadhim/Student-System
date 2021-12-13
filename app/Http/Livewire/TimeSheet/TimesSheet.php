<?php

namespace App\Http\Livewire\TimeSheet;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Timesheet;


class TimesSheet extends Component {

    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh' , 'deleteTimesheet'];
    public $search , $ID;


    public function deleteConfirmed($id){
        $this->ID = $id;
        $this->confirm('هل انت متأكد؟', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => "true",
            'cancelButtonText' => "كلا",
            'confirmButtonText' =>  'نعم', 
            'onConfirmed' => 'deleteTimesheet',
        ]);
    }

    public function deleteTimesheet(){
        $id = $this->ID;
        Timesheet::find($id)->delete();
        $this->alert(
            'success',
            'تم الحذف بنجاح'
        );

        $this->emitTo('admin.supermarket.services.services', '$refresh');
    }

    public function render(){
        $times = Timesheet::where('date', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);
        return view('livewire.time-sheet.times-sheet',[ 'times'=> $times ]);
    }
}
