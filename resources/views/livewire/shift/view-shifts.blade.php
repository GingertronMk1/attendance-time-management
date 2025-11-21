<div class="flex flex-col space-y-2">
    @foreach($shifts as $shift)
        <div class="flex flex-row">
            {{ $shift->user->name }}: {{ $shift->start }} - {{ $shift->end ?? 'Still Open' }}
        </div>
    @endforeach
</div>
