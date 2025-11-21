<?php

namespace App\Livewire\Shift;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ToggleShiftForm extends Component
{
    public function toggleShift(): void
    {
        Auth::user()->toggleShift();
        $this->dispatch('shift-updated');
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view('livewire.shift.toggle-shift-form');
    }
}
