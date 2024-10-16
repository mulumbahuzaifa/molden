<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddServiceComponent extends Component
{
    use WithFileUploads;

    public $name, $image, $desc;

    protected $rules = [
        'name' => 'required|string',
        'desc' => 'required|string',
        'image' => 'image|max:5120', // 1MB Max
    ];

    public function addService()
    {
        $this->validate();

        $service = new Service();
        $service->name = $this->name;
        $service->desc = $this->desc;

        if ($this->image) {
            $imageName = time() . '.' . $this->image->extension();
            $this->image->storeAs('services', $imageName, 'uploads');
            $service->image = $imageName;
        }

        $service->save();
        session()->flash('message', 'Service has been added successfully');

        return redirect()->route('admin.services');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-service-component')->layout('layouts.base');
    }
}
