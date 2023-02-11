@if($currentStep == 2)
    <div class="form-group">
        <label for="years" class="form-label">{{ __('academic.Academic_years') }}</label>
        <input type="number" class="form-control" id="years" wire:model="years">
        @error('years')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="grade" class="form-label">{{ __('academic.Academic_grade') }}</label>
        <input type="number" class="form-control" id="grade" wire:model="grade">
        @error('grade')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
@endif
