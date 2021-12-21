<div>
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="row">
                    <div class="col-8">
                        <div class="card-header bg-transparent border-0">
                            <h3 class=" mb-0">الطلاب</h3>
                        </div>
                    </div>
                    <div class="col-4 mt-2">
                        <form class="navbar-search navbar-search-light ml-2  ">
                            <div class="form-group mb-0 ">
                                <div class="input-group input-group-alternative input-group-merge ">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input wire:model="search" type="search" class="form-control" placeholder="البحث">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-center" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="name">الاسم</th>
                                <th scope="col" class="sort" data-sort="budget">المرحلة / القسم</th>
                                <th scope="col" class="sort" data-sort="status">رقم الهوية </th>
                                <th scope="col">الدراسة</th>
                                <th scope="col" class="sort" data-sort="completion">عدد الغيابات</th>
                                <th scope="col"> التحكم</th>
                            </tr>
                        </thead>
                        <tbody class="list text-right">
                            @foreach ($students as $index => $student)
                            <tr>
                                <td class="text-center">{{$index+1}}</td>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            @if ($student->user->profile_photo_path)
                                            <img alt="" src="{{asset('storage/' . $student->user->profile_photo_path)}}">
                                            @else
                                            <img alt="" src="{{asset('img\avtar.png')}}">      
                                            @endif
                                            
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm mr-2">{{$student->user->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$student->stage->name}}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <span class="status">{{$student->card_number}}</span>
                                    </span>
                                </td>
                                <td>
                                    @if ($student->type == 1)
                                    <span> صباحي</span>
                                    @elseif($student->type == 2 )
                                    <span> موازي</span>
                                    @else
                                    <span> مسائي</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                            @if ($student->timesheets->count() <= 1) <span class="badge badge-md badge-circle badge-floating badge-success text-white border-white">{{$student->timesheets->count()}}</span>
                                            @elseif($student->timesheets->count() == 2 )
                                            <span class="badge badge-md badge-circle badge-floating badge-warning text-white border-white">{{$student->timesheets->count()}}</span>
                                            @else
                                            <span class="badge badge-md badge-circle badge-floating badge-danger  border-white">{{$student->timesheets->count()}}</span>
                                            @endif
                                            <div>
                                                <span class="mr-2">ايام</span>
                                            </div>
                                    </div>
                                </td>
                                <td class="td-actions text-right">
                                    <a rel="tooltip" class="btn btn-info btn-icon btn-sm text-white" id="tabs-student-show-tab" data-toggle="tab" href="#tabs-student-show" role="tab" aria-controls="tabs-student-show" aria-selected="false" @click="id = !id" wire:click="getStudentID({{$student->id}})">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a rel="tooltip" class="btn btn-danger btn-icon btn-sm text-white" data-original-title="حذف" title="" name="deletequestion"  @click="id = !id" wire:click="deleteConfirmed({{$student->id}})" >
                                        <i class="fas fa-trash text-denger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
</div>