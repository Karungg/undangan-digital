<?php

namespace App\Livewire;

use App\Models\Rsvp;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateRsvp extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $amount = '';

    public $confirm = 'Saya akan datang';

    public function save()
    {
        $this->validate();

        Rsvp::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'confirm' => $this->confirm
        ]);

        $this->reset();

        $this->dispatch('rsvp-created');
    }

    public function render()
    {
        return view('livewire.create-rsvp');
    }
}
