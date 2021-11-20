@extends('layouts.master')

{{-- Title --}}
@section('title', 'الدرجات')

{{-- CONTENT --}}
@section('content')


{{-- <div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-tabs-stages-tab" data-toggle="tab" href="#tabs-tabs-stages" role="tab" aria-controls="tabs-tabs-stages" aria-selected="true"><i class="ni ni-cloud-upload-96 ml-2"></i>الامتحانات</a>
        </li>
        <li class="nav-item mr-2">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-subject-add-tab" data-toggle="tab" href="#tabs-subject-add" role="tab" aria-controls="tabs-subject-add" aria-selected="false"><i class="ni ni-bell-55 ml-2"></i>اضافة</a>
        </li>
    </ul>
</div> --}}

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tabs-stages" role="tabpanel" aria-labelledby="tabs-stages-tab">
        @livewire('grade.grade-add')
    </div>
    <div class="tab-pane fade" id="tabs-subject-add" role="tabpanel" aria-labelledby="tabs-subject-add-tab">
        @livewire('exam.exam-add')
    </div>
</div>


@stop