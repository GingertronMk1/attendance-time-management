<flux:button
    variant="primary"
    type="submit"
    wire:click="toggleShift"
    :color="Auth::user()?->hasOpenShift() ? 'red' : 'green'"
>
    {{ Auth::user()?->hasOpenShift() ? 'End' : 'Start' }} Shift
</flux:button>
