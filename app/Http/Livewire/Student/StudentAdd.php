<?php

namespace App\Http\Livewire\Student;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class StudentAdd extends Component {

    public $name , $mother_name , $email , $city ,$phoneNumber , $card_number , $district , $type , $birthday , $gender;

    protected $rules = [
        'name' => 'required',
        
    ];

    public function submit() {
        $password = randomPassword();

        $this->validate();

        $user = User::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'password' =>  Hash::make($password),
        ]);

        $user->students()->create([

            'card_number'=> $this->card_number,
            'mother_name'=> $this->mother_name ,
            'city'=> $this->city ,
            'district'=> $this->district ,
            'phoneNumber'=> $this->phoneNumber ,
            'birthday'=> $this->birthday ,
            'gender'=> $this->gender ,

        ]);

        $this->alert('success', 'تم إضافة السؤال بنجاح',
            [
                'position' =>  'top',
                'timer' =>  '3000',
                'toast' =>  true,
            ]
        );

        $this->emitTo('student.students', '$refresh');




    }

    
    public function render() {
        return view('livewire.student.student-add');
    }
}
