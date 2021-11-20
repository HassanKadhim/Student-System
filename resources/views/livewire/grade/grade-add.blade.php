<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-secondary shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                            <h2 class="mb-0">اضافة درجة  جديد</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <!-- card-body:start -->
                    <div class="row">
                        <div class="col-12 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="student_id" >
                                @foreach ($students as $student)
                                    <option class="text-right" value="{{ $student->id }}">{{ $student->user->name}}</option>
                                @endforeach
                            </select>
                            @error('student_id') <span class="error text-danger">يجب اختيار الطالب</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <input type="number" wire:model="grade" class="form-control questionsCount" placeholder="الدرجة">
                            @error('grade') <span class="error text-danger">يجب ادخال الدرجة</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="exam_id" >
                                @foreach ($exams as $exam)
                                    <option class="text-right" value="{{ $exam->id }}">{{ $exam->name}}</option>
                                @endforeach
                            </select>
                            @error('exam_id') <span class="error text-danger">يجب اختيار الامتحان</span> @enderror
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
