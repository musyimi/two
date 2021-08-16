<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CoverageComponent extends Component
{
    public function render()
    {
        return view('livewire.coverage-component')->extends('base');
    }
}
