<?php

namespace App\Livewire;

use Livewire\Component;

class FooBarComponent extends Component
{
    public ?string $fooBar = null;

    public function render()
    {
        return view('livewire.foo-bar-component');
    }
}
