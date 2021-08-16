<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WildixComponent extends Component
{
    public function render()
    {
        return view('livewire.wildix-component')->extends('base');
    }
}
