<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditServiceComponent extends Component
{
    use WithFileUploads;

    public $serviceId, $name, $image, $newImage, $desc;

    protected $rules = [
        'name' => 'required|string',
        'desc' => 'required|string',
        'newImage' => 'nullable|image|max:5120',
    ];

    public function mount($serviceId)
    {
        $service = Service::find($serviceId);
        $this->serviceId = $service->id;
        $this->name = $service->name;
        $this->desc = $service->desc;
        $this->image = $service->image;
    }

    public function updateService()
    {
        $this->validate();

        $service = Service::find($this->serviceId);
        $service->name = $this->name;
        $service->desc = $this->desc;

        if ($this->newImage) {
            $imageName = time() . '.' . $this->newImage->extension();
            $this->newImage->storeAs('services', $imageName, 'uploads');
            $service->image = $imageName;
        }

        $service->save();
        session()->flash('message', 'Service has been updated successfully');

        return redirect()->route('admin.services');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-service-component')->layout('layouts.base');
    }
}
