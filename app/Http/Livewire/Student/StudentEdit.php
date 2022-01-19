<?php

namespace App\Http\Livewire\Student;
use App\Models\Stage;
use App\Models\User;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Mail\SendPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentEdit extends Component {

    protected $listeners = ['getStudentID'];

    use LivewireAlert;
    use WithFileUploads;

    public $student, $name , $mother_name , $email , $city ,$phoneNumber , $card_number , $district , $type , $birthday , $gender , $stage_id , $image;
    
    public function getStudentID($id) {
        $this->student = Student::find($id);
        $this->name = $this->student->user->name;
        $this->mother_name = $this->student->mother_name;
        $this->email = $this->student->user->email;
        $this->city = $this->student->city;
        $this->phoneNumber = $this->student->phoneNumber;
        $this->card_number = $this->student->card_number;
        $this->district = $this->student->district;
        $this->birthday = $this->student->birthday;
        $this->gender = $this->student->gender;
        $this->type = $this->student->type;
        $this->stage_id = $this->student->stage_id;
    }
    
    public function edit() {

        $password = randomPassword();

        if($this->image){
            $image = $this->image;
            $exe = $image->extension();
            $name = randomPassword() . '-' . time() . '.' . $exe ;
            $image->storeAs('public/student/img' , $name);
    
            $image = 'student/img/' . $name;
        }else{
            $image ='student/img/avtar.png';
        }

        
        $this->student->user->update([
            'name'     => $this->name,
            'email'    => $this->email,
            'profile_photo_path' => $image,
            'password' =>  Hash::make($password),
        ]);


        $this->student->update([

            'card_number'=> $this->card_number,
            'mother_name'=> $this->mother_name ,
            'city'=> $this->city ,
            'district'=> $this->district ,
            'phoneNumber'=> $this->phoneNumber ,
            'birthday'=> $this->birthday ,
            'gender'=> $this->gender ,
            'stage_id'=> $this->stage_id ,

        ]);

        $this->alert('success', 'تم تعديل الطالب بنجاح',[
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);

        $this->emitTo('student.students', '$refresh');
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

    public function render() {
        $stages = Stage::get();
        return view('livewire.student.student-edit', [ 'stages' => $stages ] );
    }
}
