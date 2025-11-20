@props([
    'shifts' => 'array'
])
<x-layouts.app>
    <livewire:shift.toggle-shift-form />

    <div class="flex flex-col divide-y *:py-2">

    @foreach($shifts as $shift)
        <div class="flex flex-row">
            {{ $shift->user->name }}: {{ $shift->start }} - {{ $shift->end ?? 'Still Open' }}
        </div>
    @endforeach
    </div>
</x-layouts.app>
