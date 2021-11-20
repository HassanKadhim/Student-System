<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-secondary shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                            <h2 class="mb-0">اضافة مرحلة جديد</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <!-- card-body:start -->
                    <div class="row">
                        <div class="col-12 mt-3">
                            <input type="text" wire:model="name" class="form-control questionsCount" placeholder="المرحلة - القسم">
                        </div>
                        @error('name') <span class="error text-danger">يجب ادخال المرحلة - القسم</span> @enderror
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

