<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Service;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        // Fetch all services from the database
        $services = Service::all();
        $blogs = Blog::latest()->get()->take(3);

        return view('livewire.home-component', ['services' => $services, 'blogs' => $blogs])->layout('layouts.base');
    }
}
