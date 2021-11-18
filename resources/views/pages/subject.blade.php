@extends('layouts.master')

{{-- Title --}}
@section('title', 'المواد')


{{-- CONTENT --}}
@section('content')
<ul class="nav justify-content-center nav-pills nav-pills-circle mb-3" dir="ltr" id="myTabContent" role="tablist">
    <li class="nav-item">
        <a class="nav-link rounded-circle " id="tabs-subject-add" data-toggle="tab" href="#tabs-subject-add" role="tab" aria-selected="false">
            <span class="nav-link-icon d-block"><i class="fas fa-plus"></i></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link rounded-circle " id="tabs-subjects" data-toggle="tab" href="#tabs-subjects" role="tab" aria-selected="true">
            <span class="nav-link-icon d-block"><i class="fas fa-table"></i></span>
        </a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tabs-subjects" role="tabpanel" aria-labelledby="tabs-subjects-tab">
        @livewire('subject.subjects')
    </div>
    <div class="tab-pane fade" id="tabs-subject-add" role="tabpanel" aria-labelledby="tabs-subject-add-tab">
        @livewire('subject.subject-add')
    </div>
</div>
@stop