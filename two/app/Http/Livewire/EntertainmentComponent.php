<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EntertainmentComponent extends Component
{
    public function render()
    {
        return view('livewire.entertainment-component')->extends('base');
    }
}
