<x-layouts.app :title="__('Dashboard')">
    <div class="flex flex-col divide-y *:py-2">

    @foreach(App\Models\User::all() as $user)
        <span>

        {{ $user->name }} {{ $user->reportsTo(auth()->user()) ? 'Report' : 'Not a report' }}
        </span>
    @endforeach
    </div>
</x-layouts.app>
