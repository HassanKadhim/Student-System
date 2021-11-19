<?php

namespace App\Http\Livewire\TimeSheet;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Timesheet;


class TimesSheet extends Component {

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];
    public $search;

    public function render(){
        $times = Timesheet::where('date', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);
        return view('livewire.time-sheet.times-sheet',[ 'times'=> $times ]);
    }
}
