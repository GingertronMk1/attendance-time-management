@php

use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component {
    public function toggleShift(): void
    {
        Auth::user()->toggleShift();
    }
}
@endphp

<flux:button
    variant="primary"
    type="submit"
    wire:click="toggleShift"
    :color="Auth::user()?->hasOpenShift() ? 'red' : 'green'"
>
    {{ Auth::user()?->hasOpenShift() ? 'End' : 'Start' }} Shift
</flux:button>
