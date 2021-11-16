@extends('layouts.master')

{{-- Title --}}
@section('title', 'Students')


{{-- CONTENT --}}
@section('content')

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
        @livewire('student.students')
    </div>
    <div class="tab-pane fade" id="tabs-student-add" role="tabpanel" aria-labelledby="tabs-student-add-tab">
        @livewire('student.student-add')
    </div>
</div>

{{-- @livewire('student.students') --}}

@stop