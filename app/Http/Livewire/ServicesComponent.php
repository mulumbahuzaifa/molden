<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        // Fetch all services from the database
        $services = Service::all();
        return view('livewire.services-component', ['services' => $services])->layout('layouts.base');
    }
}
