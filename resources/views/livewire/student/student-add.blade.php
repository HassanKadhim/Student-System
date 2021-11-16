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
                            <input type="text" name="name" class="form-control questionsCount" placeholder="الاسم الكامل">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" name="examTime" class="form-control " placeholder="اسم الام الكامل">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" name="" class="form-control " placeholder="البريد الالكتروني">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" name="" class="form-control " placeholder="رقم الهاتف">
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" name="" class="form-control " placeholder="رقم هوية الطالب">
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl">
                                <option disabled selected >القسم</option>
                                <option>علوم الحاسوب</option>
                                <option>نظم المعلومات الحاسوبية</option>
                            </select>
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl">
                                <option disabled selected >الدراسة</option>
                                <option>مسائي</option>
                                <option>صباحي</option>
                                <option>موازي</option>
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
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl">
                                @foreach (get_cities() as $city)
                                    <option class="text-right" value="{{ $city }}">{{ $city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" name="" class="form-control " placeholder="المنطقة / القضاء">
                        </div>
                        <div class="col-12 mt-5">
                        <button type="button" class="btn btn-primary btn-block ">اضافة</button>
                        </div>
                    </div>
                    <!-- card-body:finish -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
