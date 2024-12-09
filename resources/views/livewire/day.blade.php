<div class="p-10 text-center">
    <p class="font-semibold text-xs uppercase">Pills Taken On</p>
    <h1 class="text-4xl">
        {{ $day->monthName }} {{ $day->day }}, {{ $day->year }}
    </h1>

    <ul class="grid grid-rows-1 grid-cols-2 gap-3 my-3">
        <li>
            <x-primary-button
                type="button"
                wire:click="prev()"
            >
                {{ $previousDay->toDateString() }}
            </x-primary-button>
        </li>
        <li>
            <x-primary-button
                type="button"
                wire:click="next()"
            >
                {{ $nextDay->toDateString() }}
            </x-primary-button>
        </li>
    </ul>
</div>
