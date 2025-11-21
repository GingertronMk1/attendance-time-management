<?php

namespace App\Livewire\Shift;

use App\Models\Shift;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ViewShifts extends Component
{
    use WithPagination;

    #[On('shift-updated')]
    public function updateShifts(): void
    {
        $this->resetPage();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view(
            'livewire.shift.view-shifts',
            [
                'shifts' => Shift::query()
                    ->orderBy('shifts.start', 'desc')
                    ->paginate(10),
            ]
        );
    }
}
