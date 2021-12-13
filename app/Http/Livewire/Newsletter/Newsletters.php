<?php

namespace App\Http\Livewire\Newsletter;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\NewsLetter;
use Livewire\WithPagination;
use Livewire\Component;

class Newsletters extends Component
{
    public $search , $ID;
    
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh' , 'deleteNewsLetter'];
    protected $queryString = ['search'];

    public function deleteConfirmed($id){
        $this->ID = $id;
        $this->confirm('هل انت متأكد؟', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => "true",
            'cancelButtonText' => "كلا",
            'confirmButtonText' =>  'نعم', 
            'onConfirmed' => 'deleteService',
        ]);
    }

    public function deleteNewsLetter(){
        $id = $this->ID;
        NewsLetter::find($id)->delete();
        $this->alert(
            'success',
            'تم الحذف بنجاح'
        );

        $this->emitTo('admin.supermarket.services.services', '$refresh');
    }

    public function render() {
        $newsletters = NewsLetter::where('title', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);
        return view('livewire.newsletter.newsletters',['newsletters' => $newsletters]);
    }
}
