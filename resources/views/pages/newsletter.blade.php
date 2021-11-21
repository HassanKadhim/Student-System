@extends('layouts.master')

{{-- Title --}}
@section('title', 'الاشعارات')

{{-- CONTENT --}}
@section('content')

<div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-tabs-stages-tab" data-toggle="tab" href="#tabs-tabs-stages" role="tab" aria-controls="tabs-tabs-stages" aria-selected="true"><i class="fas fa-table ml-2"></i>الاشعارات</a>
        </li>
        <li class="nav-item mr-2">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-subject-add-tab" data-toggle="tab" href="#tabs-subject-add" role="tab" aria-controls="tabs-subject-add" aria-selected="false"><i class="fas fa-plus ml-2"></i>اضافة</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tabs-stages" role="tabpanel" aria-labelledby="tabs-stages-tab">
        @livewire('newsletter.newsletters')
    </div>
    <div class="tab-pane fade" id="tabs-subject-add" role="tabpanel" aria-labelledby="tabs-subject-add-tab">
        @livewire('newsletter.newsletter-add')
    </div>
</div>


@stop