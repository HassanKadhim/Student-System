@extends('layouts.master')

{{-- Title --}}
@section('title', 'الغيابات')


{{-- CONTENT --}}
@section('content')
<div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-subjects" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-subjects" data-toggle="tab" href="#tabs-subjects" role="tab" aria-controls="tabs-subjects" aria-selected="true"><i class="fas fa-table ml-2"></i></i>الغيابات</a>
        </li>
        <li class="nav-item mr-3">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-subject-add-tab" data-toggle="tab" href="#tabs-subject-add" role="tab" aria-controls="tabs-subject-add" aria-selected="false"><i class="fas fa-plus ml-2"></i>اضافة </a>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tabs-subjects" role="tabpanel" aria-labelledby="tabs-subjects-tab">
        @livewire('time-sheet.times-sheet')
    </div>
    
    <div class="tab-pane fade" id="tabs-subject-add" role="tabpanel" aria-labelledby="tabs-subject-add-tab">
        @livewire('time-sheet.time-sheet-add')
    </div>
</div>



@stop