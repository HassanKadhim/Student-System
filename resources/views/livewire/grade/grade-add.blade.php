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
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="student_id" >
                                <option class="text-right" selected >الطالب</option>
                                @foreach ($students as $student)
                                    <option class="text-right" value="{{ $student->id }}">{{ $student->user->name}}</option>
                                @endforeach
                            </select>
                            @error('student_id') <span class="error text-danger">يجب اختيار الطالب</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="exam_id" >
                                <option class="text-right" selected >الامتحان</option>
                                @foreach ($exams as $exam)
                                    <option class="text-right" value="{{ $exam->id }}">{{ $exam->name}}</option>
                                @endforeach
                            </select>
                            @error('exam_id') <span class="error text-danger">يجب اختيار الامتحان</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="subject_id" >
                                <option class="text-right" selected  >المادة</option>
                                @foreach ($subjects as $subject)
                                    <option class="text-right" value="{{ $subject->id }}">{{ $subject->name}}</option>
                                @endforeach
                            </select>
                            @error('subject_id') <span class="error text-danger">يجب اختيار المادة</span> @enderror
                        </div>
                        <div class="col-6 mt-3">
                            <input type="number" wire:model="grade" class="form-control questionsCount" placeholder="الدرجة">
                            @error('grade') <span class="error text-danger">يجب ادخال الدرجة</span> @enderror
                        </div>
                        <div class="col-12 mt-5">
                        <button type="submit" class="btn bg-gradient-info text-white btn-block ">اضافة</button>
                        </div>
                    </div>
                    <!-- card-body:finish -->
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        function myFunction() {
          // Get the value of the input field with id="numb"
            let x = document.getElementById("numb").value;
            // If x is Not a Number or less than one or greater than 10
            let text;
            if (isNaN(x) || x < 1 || x > 10) {
                text = "Input not valid";
            } else {
                text = "Input OK";
            }
            document.getElementById("demo").innerHTML = text;
        }
        </script>
</div>
