<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class CountDown extends Component
{
    public $days;
    public $hours;
    public $minutes;
    public $seconds;

    public $targetDate;

    public function mount()
    {
        // Set the target date for the wedding
        $this->targetDate = Carbon::create(2024, 12, 1, 0, 0, 0); // December 1, 2024

        // Initial countdown calculation
        $this->updateCountdown();
    }

    public function updateCountdown()
    {
        // Calculate the remaining time
        $diff = $this->targetDate->diff(now());

        // Update the countdown properties
        $this->days = $diff->d;
        $this->hours = $diff->h;
        $this->minutes = $diff->i;
        $this->seconds = $diff->s;
    }

    public function render()
    {
        $this->updateCountdown(); // Update countdown before rendering

        return view('livewire.count-down', [
            'days' => $this->days,
            'hours' => $this->hours,
            'minutes' => $this->minutes,
            'seconds' => $this->seconds,
        ]);
    }
}
