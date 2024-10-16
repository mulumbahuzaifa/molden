<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceDetailsComponent extends Component
{
    public $serviceId;

    public function mount($serviceId){
        // Set the service ID on mount
        $service = Service::where('id', $serviceId)->first();
        $this->serviceId = $service->id;
    }

    public function render()
    {
        // Fetch service details based on the provided ID
        // $service = Service::findOrFail($this->serviceId);
        $service = Service::where('id', $this->serviceId)->first();


        $services = Service::all();
        return view('livewire.service-details-component',['service' => $service, 'services' => $services])->layout('layouts.base');
    }
}
