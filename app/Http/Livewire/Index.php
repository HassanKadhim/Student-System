<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
class Index extends Component
{
    public function render() {
        $student = Student::count();
        $studentm = Student::where('type', 1)->count();
        $studentn = Student::where('type', 3)->count();
        return view('livewire.index',[
            'student' => $student,
            'studentm' => $studentm,
            'studentn' => $studentn
        ]);
    }
}
