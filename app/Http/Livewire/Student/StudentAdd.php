<?php

namespace App\Http\Livewire\Student;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Stage;
use App\Mail\SendPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentAdd extends Component {
    
    use LivewireAlert;
    use WithFileUploads;

    public $name , $mother_name , $email , $city ,$phoneNumber , $card_number , $district , $type , $birthday , $gender , $stage_id , $image;

    protected $rules = [
        'name' => 'required',
    ];

    public function submit() {

        $password = randomPassword();

        $this->validate();

        $image = $this->image;
        $exe = $image->extension();
        $name = randomPassword() . '-' . time() . '.' . $exe ;
        $image->storeAs('public/student/img' , $name);

        $image = 'student/img/' . $name;
        
        $user = User::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'profile_photo_path' => $image,
            'password' =>  Hash::make($password),
        ]);


        $user->student()->create([

            'card_number'=> $this->card_number,
            'mother_name'=> $this->mother_name ,
            'city'=> $this->city ,
            'district'=> $this->district ,
            'phoneNumber'=> $this->phoneNumber ,
            'birthday'=> $this->birthday ,
            'gender'=> $this->gender ,
            'stage_id'=> $this->stage_id ,

        ]);

        $this->alert('success', 'تم إضافة الطالب بنجاح',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);

        $this->emitTo('student.students', '$refresh');

        Mail::to($this->email)->send(new SendPassword($password));



    }

    
    public function render() {

        $stages = Stage::get();

        return view('livewire.student.student-add',[ 'stages' => $stages ]);
    }
}
