<?php

namespace App\Livewire\Shift;

use App\Models\Shift;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewShifts extends Component
{
    public Collection $shifts;

    public function mount(): void
    {
        $this->updateShifts();
    }

    #[On('shift-updated')]
    public function updateShifts(): void
    {
        $this->shifts = Shift::query()->orderBy('shifts.start', 'desc')->get();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view('livewire.shift.view-shifts');
    }
}
