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
                            <input type="text" wire:model="name" class="form-control questionsCount" placeholder="الاسم الكامل">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" wire:model="mother_name" class="form-control " placeholder="اسم الام الكامل">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="email" wire:model="email" class="form-control " placeholder="البريد الالكتروني">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="number" wire:model="phoneNumber" class="form-control " placeholder="رقم الهاتف">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="number" wire:model="card_number" class="form-control " placeholder="رقم هوية الطالب">
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model= "gender" >
                                <option disabled selected  >الجنس</option>
                                <option value="male">ذكر</option>
                                <option value="female"> اناثى</option>
                            </select>
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="type">
                                <option disabled selected >الدراسة</option>
                                <option value="3">مسائي</option>
                                <option value="1">صباحي</option>
                                <option value="2">موازي</option>
                            </select>
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl">
                                <option disabled selected >المرحلة </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-3 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="city" >
                                @foreach (get_cities() as $city)
                                    <option class="text-right" value="{{ $city }}">{{ $city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3 mt-3">
                            <input type="text" wire:model="district" class="form-control " placeholder="المنطقة / القضاء">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="date" wire:model="birthday" class="form-control " placeholder="تاريخ الميلاد" dir="rtl">
                        </div>
                        <div class="col-12 mt-5">
                        <button type="submit" class="btn btn-primary btn-block ">اضافة</button>
                        </div>
                    </div>
                    <!-- card-body:finish -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
