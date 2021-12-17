<?php

namespace App\Http\Livewire\Newsletter;
use App\Models\NewsLetter;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Firebase\JWT\JWT;



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

        
    $SERVER_API_KEY = 'AAAArBOxgxc:APA91bEJwcn7naDOTcrcXhe9rywmeYPPZW-pPtDSgp_hGN4XcHcWrpHasLLeRK62FejTfFgYMnBADDev5nwlvCZWLwi-DUQN03e6kF8ZZeOdEK8Wx1L7EpV1oKbZES4QuR58v2WAMPFC';

    

    $data = [

    "to" => "/topics/all", 
        
        "notification" => [

            "title" => $this->title,

            "body" => $this->body,

            "sound"=> "default" // required for sound on ios

        ],

        

    ];

    $dataString = json_encode($data);

    $headers = [

        'Authorization: key=' . $SERVER_API_KEY,
        'Content-Type: application/json',
        "charset=UTF-8"

    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

    $response = curl_exec($ch);


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
