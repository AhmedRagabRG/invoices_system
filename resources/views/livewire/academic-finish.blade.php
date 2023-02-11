@if($currentStep == 3)
    <div class="form-group">
        <label for="floatingTextarea2" class="form-label">{{ __('academic.Academic_notes') }}</label>
        <textarea class="form-control" id="floatingTextarea2" style="height: 120px" wire:model="notes"></textarea>
    </div>
@endif
