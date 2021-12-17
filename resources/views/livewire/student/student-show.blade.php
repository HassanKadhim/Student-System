<div>
    @if($student)
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="{{ asset('img\cover.jpg') }}" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="{{asset('storage/' . $student->user->profile_photo_path)}}" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <br> <br> <br> <br>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">{{$student->card_number}}</span>
                                    <span class="description">رقم الهوية </span>
                                </div>
                                <div>
                                    <span class="heading">{{$student->phoneNumber}}</span>
                                    <span class="description">رقم الهاتف</span>
                                </div>
                                <div>
                                    <span class="heading">{{$student->birthday}}</span>
                                    <span class="description">تاريخ الميلاد</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5 class="h3">
                            {{$student->user->name}}<span class="font-weight-light">, {{$student->gender}}</span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{$student->stage->name}} ,

                            @if ($student->type == 1)
                            <span> صباحي</span>
                            @elseif($student->type == 2 )
                            <span> موازي</span>
                            @else
                            <span> مسائي</span>
                            @endif
                        </div>
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>{{$student->city}} - {{$student->district}}
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>{{$student->user->email}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">الامتحانات</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="text-center" data-sort="name">#</th>
                                    <th scope="col" class="sort" data-sort="budget">الامتحان</th>
                                    <th scope="col" class="sort" data-sort="budget">المادة</th>
                                    <th scope="col" class="sort" data-sort="budget">الدرجة</th>
                                </tr>
                            </thead>

                            <tbody class="list text-right">
                                @forelse ($student->grades as $index => $item)
                                <tr>
                                    <td class="text-center">{{$index+1}}</td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm mr-2">{{$item->exam->name}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm mr-2">{{$item->subject->name}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm mr-2">{{$item->grade}}</span>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                @empty
                                <td colspan="7">
                                    <h5 class="text-center text-muted">لا يوجد امتحانات</h5>
                                </td>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">الغيابات / {{$student->timesheets->count()}}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="text-center" data-sort="name">#</th>
                                    <th scope="col" class="sort" data-sort="budget">المادة</th>
                                    <th scope="col" class="sort" data-sort="budget">التاريخ</th>
                                </tr>
                            </thead>

                            <tbody class="list text-right">
                                @forelse ($student->timesheets as $index => $item)
                                <tr>
                                    <td class="text-center">{{$index+1}}</td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm mr-2">{{$item->subject->name}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm mr-2">{{$item->date}}</span>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                @empty
                                <td colspan="7">
                                    <h5 class="text-center text-muted">لا يوجد غياب</h5>
                                </td>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $student->timesheets->links() }} --}}
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0"> ارسال اشعار</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="submit">
                        <div class="row">
                            <div class="col-xl-12 mb-5 mb-xl-0">
                                    <!-- card-body:start -->
                                    <div class="row">
                                        <div class="col-10 mt-3">
                                            <input type="text" wire:model="title" class="form-control questionsCount" placeholder="العنوان">
                                        </div>
                                        <div class="col-2 mt-3">
                                            <select class="form-control section" wire:model="color" >
                                                <option class="text-right"  disabled>نوع الاشعار</option>
                                                    <option class="text-right" value="0xff349bf7">اعتيادي</option>
                                                    <option class="text-right" value="0xfff6be32">تنبيه</option>
                                                    <option class="text-right" value="0xfffa3838">انذار</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <textarea rows="4" wire:model="body" class="form-control" placeholder="المحتوى ...">السلام عليكم</textarea>
                                        </div>
                                        <div class="col-12 mt-5">
                                        <button type="submit" class="btn btn-primary btn-block ">ارسال</button>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row mt-4">
        <div class="w-100 text-center" style="font-size: 26px">
            <i class="fas fa-spinner fa-spin fa-3x"></i>
        </div>
    </div>
    @endif
</div>