@props([
    'shifts' => 'array'
])
<x-layouts.app>
    <form action="{{ route('toggle-shift') }}" method="POST">
        @csrf
        <flux:button
            variant="primary"
            type="submit"
            :color="auth()->user()?->hasOpenShift() ? 'red' : 'green'"
        >
            {{ auth()->user()?->hasOpenShift() ? 'End' : 'Start' }} Shift
        </flux:button>
    </form>

    <div class="flex flex-col divide-y *:py-2">

    @foreach($shifts as $shift)
        <div class="flex flex-row">
            {{ $shift->user->name }}: {{ $shift->start }} - {{ $shift->end ?? 'Still Open' }}
        </div>
    @endforeach
    </div>
</x-layouts.app>
