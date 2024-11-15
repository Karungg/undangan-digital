<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ShowComment extends Component
{
    use WithPagination;

    #[On('comment-created')]
    public function render()
    {
        return view('livewire.show-comment', [
            'comments' => Comment::orderBy('created_at', 'desc')->cursorPaginate(5)
        ]);
    }
}
