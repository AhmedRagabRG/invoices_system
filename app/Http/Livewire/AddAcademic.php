<?php

namespace App\Http\Livewire;

use App\Models\Academic;
use Livewire\Component;

class AddAcademic extends Component
{
    public int $currentStep = 1;
    public string $name_ar, $name_en, $notes;
    public int $years = 4;
    public float $grade = 50;

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
            'grade' => 'required|numeric',
            'notes' => 'required',
        ]);
    }

    public function nextStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'name_ar' => 'required|string',
                'name_en' => 'required|string',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'years' => 'required|numeric',
                'grade' => 'required|numeric',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'notes' => 'required',
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

    public function submit()
    {

        try {
            Academic::create([
                'name' => [
                    'en' => $this->name_en,
                    'ar' => $this->name_ar
                ],
                'notes' => $this->notes,
                'academic_years' => $this->years,
                'requirements' => $this->grade,
            ]);

            $this->currentStep = 1;
            $this->clearForm();
            toastr()->success(__('message.success'), ['timeOut' => 5000]);
        } catch (\Exception $e) {
            echo $e->__toString();
        }
    }

    public function clearForm()
    {
        $this->name_ar = '';
        $this->name_en = '';
        $this->notes = '';
        $this->grade = 4;
        $this->years = 50;
    }
}
