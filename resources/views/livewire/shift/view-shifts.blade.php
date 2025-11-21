<div class="flex flex-col space-y-2">
    <div class="flex flex-row text-xl">
        <div class="w-1/2">Person</div>
        <div class="w-1/4">Shift Start</div>
        <div class="w-1/4">Shift End</div>
    </div>
    @foreach($shifts as $shift)
        <div
            class="flex flex-row"
            wire:key="{{ $shift->id }}"
        >
            <div class="w-1/2">{{ $shift->user->name }}</div>
            <div class="w-1/4" x-text='(new Date(@json($shift->start))).toLocaleString()'></div>
            @if($shift->end)
                <div class="w-1/4" x-text='(new Date(@json($shift->end))).toLocaleString()'></div>
            @else
                <div class="w-1/4">Still Open</div>
            @endif
        </div>
    @endforeach

    <div class="mt-3">
        {{ $shifts->links() }}
    </div>
</div>
