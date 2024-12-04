<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('The day...')]
class Day extends Component
{
    public $dateString;

    public function mount($dateString)
    {
        $this->dateString = Carbon::parse($dateString);
    }

    public function render()
    {
        return view('livewire.day');
    }
}
