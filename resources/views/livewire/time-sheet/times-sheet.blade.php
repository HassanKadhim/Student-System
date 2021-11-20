<div>
    
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="row">
                    <div class="col-8">
                        <div class="card-header bg-transparent border-0">
                            <h3 class=" mb-0">الغيابات</h3>
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
                                <th scope="col" class="sort" data-sort="name">اسم الطالب </th>
                                <th scope="col" class="sort" data-sort="name">المادة </th>
                                <th scope="col" class="sort" data-sort="budget">التاريخ</th>
                                <th scope="col"> التحكم</th>
                            </tr>
                        </thead>
                        <tbody class="list text-right">
                            @foreach ($times as $index => $time)
                            <tr>
                                <td class="text-center">{{$index+1}}</td>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm mr-2">{{$time->student->user->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$time->subject->name}}
                                </td>
                                <td class="budget">
                                    {{$time->date}}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $times->links() }}
                </div>
            </div>
        </div>
    </div>
    
</div>
