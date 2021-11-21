<?php

namespace App\Http\Livewire\Newsletter;
use App\Models\NewsLetter;
use Livewire\WithPagination;
use Livewire\Component;

class Newsletters extends Component
{
    public $search;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];
    protected $queryString = ['search'];

    public function render() {
        $newsletters = NewsLetter::where('title', 'like', '%'.$this->search.'%')->orderByDesc('id')->paginate(6);
        return view('livewire.newsletter.newsletters',['newsletters' => $newsletters]);
    }
}
