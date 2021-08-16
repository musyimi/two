<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IotworldComponent extends Component
{
    public function render()
    {
        return view('livewire.iotworld-component')->extends('base');
    }
}
