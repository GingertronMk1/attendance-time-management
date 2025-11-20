<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;
use Illuminate\Support\Collection;

new class extends Component {
    public Collection $shifts;

    public function mount(): void
    {
        $this->updateShifts();
    }

    #[\Livewire\Attributes\On('shift-updated')]
    public function updateShifts(): void
    {
        $this->shifts = \App\Models\Shift::query()->orderBy('shifts.start', 'desc')->get();
    }
}
?>

<div class="flex flex-col space-y-2">
    @foreach($shifts as $shift)
        <div class="flex flex-row">
            {{ $shift->user->name }}: {{ $shift->start }} - {{ $shift->end ?? 'Still Open' }}
        </div>
    @endforeach
</div>
