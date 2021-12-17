<?php

namespace App\Http\Livewire\Student;
use App\Models\Student;
use App\Models\notification;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentShow extends Component {

    use  LivewireAlert;
    protected $listeners = ['$refresh' , 'getStudentID' ];
    
    public $ID , $student , $title , $body , $color = '0xff349bf7' ;

    public function getStudentID($id){
        $this->ID = $id;
        $this->student = Student::find($this->ID);
    }
    protected $rules = [
        'title' => 'required',
        'body' => 'required',
    ];

    public function submit() {
        $this->validate();
        
        notification::create([
            'title' => $this->title,
            'body' => $this->body,
            'student_id' => $this->ID,
            'color' => $this->color,
        ]);

        $SERVER_API_KEY = 'AAAArBOxgxc:APA91bEJwcn7naDOTcrcXhe9rywmeYPPZW-pPtDSgp_hGN4XcHcWrpHasLLeRK62FejTfFgYMnBADDev5nwlvCZWLwi-DUQN03e6kF8ZZeOdEK8Wx1L7EpV1oKbZES4QuR58v2WAMPFC';

        $data = [
    
            "registration_ids" => [
                $this->student->user->fiertoken
            ],

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
    }

    

    public function render() {
        return view('livewire.student.student-show');
    }
}
