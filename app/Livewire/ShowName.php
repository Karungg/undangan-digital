<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class ShowName extends Component
{
    #[Url(keep: true)]
    public $name = '';

    public function render()
    {
        return <<<'HTML'
        <div>
            {{ $name }}
        </div>
        HTML;
    }
}
