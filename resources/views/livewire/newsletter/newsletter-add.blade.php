<div>
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
                                <div class="col-12 mt-3">
                                    <input type="text" wire:model="title" class="form-control questionsCount" placeholder="العنوان">
                                    @error('title') <span class="error text-danger">يجب ادخال العنوان</span> @enderror
                                </div>
                                <div class="col-12 mt-3">
                                    <textarea rows="4" wire:model="body" class="form-control" placeholder="المحتوى ...">السلام عليكم</textarea>
                                    @error('body') <span class="error text-danger">يجب ادخال المحتوى</span> @enderror
                                </div>
                                <div class="col-12 mt-5">
                                <button type="submit" class="btn bg-gradient-info text-white btn-block ">ارسال</button>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
