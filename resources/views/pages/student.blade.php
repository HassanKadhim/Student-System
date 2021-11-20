@extends('layouts.master')

{{-- Title --}}
@section('title', 'Students')


{{-- CONTENT --}}
@section('content')

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tabs-subjects" role="tabpanel" aria-labelledby="tabs-subjects-tab">
        @livewire('student.students')
    </div>
    
    <div class="tab-pane fade" id="tabs-student-show" role="tabpanel" aria-labelledby="tabs-student-show-tab">
        @livewire('student.student-show')
    </div>
</div>

{{-- @livewire('student.students') --}}

@stop