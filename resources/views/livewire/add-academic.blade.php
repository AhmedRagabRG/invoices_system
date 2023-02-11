<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button"
                   class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>
                <p>{{ __('academic.Academic_data') }}</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button"
                   class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>
                <p>{{ __('academic.Academic_requirements') }}</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button"
                   class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                   disabled="disabled">3</a>
                <p>{{ __('academic.Academic_notes') }}</p>
            </div>
        </div>
    </div>

    @include('livewire.academic-data')
    @include('livewire.academic-requirements')
    @include('livewire.academic-finish')

    <div class="btn-group me-2 sw-btn-group" role="group">
        <button wire:click='prevStep' class="btn btn-danger sw-btn-prev @if($currentStep == 1) disabled @endif" type="button">Previous</button>

        @if($currentStep != 3)
            <button wire:click='nextStep' class="btn btn-success sw-btn-next" type="button">Next</button>
        @endif

        @if($currentStep == 3)
            <button wire:click='submit' class="btn btn-primary" type="button">Finish</button>
        @endif
    </div>

</div>


