<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateComment extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $words = '';

    public function save()
    {
        $this->validate();

        Comment::create([
            'name' => $this->name,
            'words' => $this->words,
        ]);

        $this->reset();

        $this->dispatch('comment-created');
    }

    public function render()
    {
        return view('livewire.create-comment');
    }
}
