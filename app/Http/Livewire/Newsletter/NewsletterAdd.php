<?php

namespace App\Http\Livewire\Newsletter;
use App\Models\NewsLetter;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class NewsletterAdd extends Component
{
    use  LivewireAlert;
    public $title , $body ;
    
    protected $rules = [
        'title' => 'required',
        'body' => 'required',
    ];

    public function submit() {
        $this->validate();

        NewsLetter::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        $this->alert('success', 'تم ',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);

        $this->emitTo('newsletter.newsletters', '$refresh');
    }
    
    public function render() {
        return view('livewire.newsletter.newsletter-add');
    }
}
