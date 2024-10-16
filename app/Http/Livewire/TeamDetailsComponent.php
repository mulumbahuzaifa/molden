<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TeamDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.team-details-component')->layout('layouts.base');
    }
}
