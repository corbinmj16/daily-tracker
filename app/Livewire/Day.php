<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('The day...')]
class Day extends Component
{
    public Carbon $day;
    public Carbon $previousDay;
    public Carbon $nextDay;

    public function mount(Request $request): void
    {
        // Get date from query params
        $dateFromUrl = $request->query('date');

        // Set the date from URL if present
        $this->day = $dateFromUrl ? Carbon::parse($dateFromUrl) : Carbon::now();
        $this->setNextAndPrevious();

        // Add the date to the query params
        if (! $dateFromUrl) {
            $this->redirect('/day' . '?date=' . $this->day->toDateString());
        }
    }

    public function next(): void
    {
        $this->day = $this->day->addDay();
        $this->setNextAndPrevious();
    }

    public function prev(): void
    {
        $this->day = $this->day->subDay();
        $this->setNextAndPrevious();
    }

    private function setNextAndPrevious(): void
    {
        $this->previousDay = $this->day->copy()->subDay();
        $this->nextDay = $this->day->copy()->addDay();
    }

    public function render()
    {
        return view('livewire.day');
    }
}
