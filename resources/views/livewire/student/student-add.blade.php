<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-secondary shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                            <h2 class="mb-0">اضافة طالب جديد</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <!-- card-body:start -->
                    <div class="row">
                        <div class="col-6 mt-3">
                            <input  type="text" wire:model="name" class="form-control questionsCount" placeholder="الاسم الكامل">
                            @error('name') <span class="error text-danger">يجب ادخال الاسم</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" wire:model="mother_name" class="form-control " placeholder="اسم الام الكامل">
                            @error('mother_name') <span class="error text-danger">يجب ادخال اسم الام</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <input type="email" wire:model="email" class="form-control " placeholder="البريد الالكتروني">
                            @error('email') <span class="error text-danger">البريد الالكتروني مطلوب</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <input id="phoneNumber" type="number" wire:model="phoneNumber" class="form-control " placeholder="رقم الهاتف">
                            @error('phoneNumber') <span class="error text-danger">رقم الهاتف غير صالح</span> @enderror
                            <p id="demo"></p>
                        </div>
                        <div class="col-6 mt-3">
                            <input type="number" wire:model="card_number" class="form-control " placeholder="رقم هوية الطالب">
                            @error('card_number') <span class="error text-danger">يجب ادخال رقم هوية من 6 ارقام</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model= "gender" >
                                <option  selected  >الجنس</option>
                                <option value="ذكر">ذكر</option>
                                <option value="اناثى"> اناثى</option>
                            </select>
                            @error('gender') <span class="error text-danger">يجب اختيار الجنس</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="type">
                                <option  selected >الدراسة</option>
                                <option value="3">مسائي</option>
                                <option value="1">صباحي</option>
                                <option value="2">موازي</option>
                            </select>
                            @error('type') <span class="error text-danger">يجب اختيار الدراسة</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl"  wire:model="stage_id">
                                <option  selected >المرحلة </option>
                                @foreach($stages as $stage)
                                <option value="{{$stage->id}}">{{$stage->name}}</option>
                                @endforeach
                            </select>
                            @error('stage_id') <span class="error text-danger">يجب اختيار المرحلة</span> @enderror
                        </div>
                        <div class="col-3 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="city" >
                                <option  selected >المدينة </option>
                                @foreach (get_cities() as $city)
                                    <option class="text-right" value="{{ $city }}">{{ $city}}</option>
                                @endforeach
                            </select>
                            @error('city') <span class="error text-danger">يجب اختيار المدينة</span> @enderror 
                        </div>
                        <div class="col-3 mt-3">
                            <input type="text" wire:model="district" class="form-control " placeholder="المنطقة / القضاء">
                            @error('district') <span class="error text-danger">يجب اختيار االمنطقة</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <input type="date" wire:model="birthday" class="form-control " placeholder="تاريخ الميلاد" dir="rtl">
                            @error('birthday') <span class="error text-danger">يجب ادخال التاريخ</span>@enderror
                        </div>
                        <div class="col-12 mt-3" dir="ltr">
                            <input type="file" class="form-control"  name="file-1[]" data-multiple-caption="{count} files selected" class="custom-file-input" id="customFileLang" wire:model="image" lang="ar">
                            <label class="custom-file-label text-left" for="customFileLang">اختار الصور</label>
                        </div>
                        <div class="col-12 mt-5">
                        <button onclick="myFunction()" type="submit" class="btn bg-gradient-info text-white btn-block ">اضافة</button>
                        </div>
                    </div>
                    <!-- card-body:finish -->
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</div>
