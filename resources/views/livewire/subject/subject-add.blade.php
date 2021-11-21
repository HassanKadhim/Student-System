<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-secondary shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                            <h2 class="mb-0">اضافة مادة جديد</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <!-- card-body:start -->
                    <div class="row">
                        <div class="col-6 mt-3">
                            <input type="text" wire:model="name" class="form-control questionsCount" placeholder="اسم المادة">
                        </div>
                        <div class="col-6 mt-3">
                            <select class="form-control section" dir="rtl" wire:model="stage_id" >
                                @foreach ($stages as $stage)
                                    <option class="text-right" value="{{ $stage->id }}">{{ $stage->name}}</option>
                                @endforeach
                            </select>
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
</div>
