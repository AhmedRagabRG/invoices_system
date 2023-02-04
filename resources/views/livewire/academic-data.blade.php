@if($currentStep == 1)
    <div class="form-group">
        <label for="name_ar" class="form-label">{{ __('academic.Academic_ar_name') }}</label>
        <input type="text" class="form-control" id="name_ar" wire:model="name_ar">
        @error('name_ar')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="name_en" class="form-label">{{ __('academic.Academic_en_name') }}</label>
        <input type="text" class="form-control" id="name_en" wire:model="name_en">
        @error('name_en')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
@endif
