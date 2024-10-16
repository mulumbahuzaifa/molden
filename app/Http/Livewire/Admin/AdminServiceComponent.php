<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceComponent extends Component
{
    use WithPagination;

    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        session()->flash('message', 'Service has been deleted successfully');
    }

    public function render()
    {
        $services = Service::paginate(12);
        return view('livewire.admin.admin-service-component', ['services' => $services])->layout('layouts.base');
    }
}
