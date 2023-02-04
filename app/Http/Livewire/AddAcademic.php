<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddAcademic extends Component
{
    public int $currentStep = 1;

    public string $name_ar, $name_en;
    public int $years;

    public function render()
    {
        return view('livewire.add-academic');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'years' => 'required|numeric',
        ]);
    }

    public function nextStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'name_ar' => 'required|string',
                'name_en' => 'required|string',
            ], [
                'name_ar.required' => "جب شسيشيشسيشس"
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'years' => 'required|numeric',
            ], [
                'years.required' => "جب شسيشيشسيشس"
            ]);
        }

        $this->currentStep += 1;
    }

    public function prevStep()
    {
        if ($this->currentStep != 1) {
            $this->currentStep -= 1;
        }
    }

    public function submit() {
        $this->validate();


    }
}
