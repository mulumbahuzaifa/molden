<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Job;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddJobComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $company;
    public $description;
    public $location;
    public $salary;
    public $image;
    public $categoryId;
    public $duration;
    public $hours;

    protected $rules = [
        'title' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'description' => 'required|string',
        'location' => 'required|string|max:255',
        'salary' => 'required|numeric|min:0',
        'categoryId' => 'required|exists:categories,id', // Validate categoryId
        'image' => 'image|max:5120', // 1MB Max
        'duration' => 'required|string|max:255',
        'hours' => 'required|string|max:255',
    ];

    public function addJob()
    {
        $this->validate();

        $job = new Job();
        $job->title = $this->title;
        $job->company = $this->company;
        $job->description = $this->description;
        $job->location = $this->location;
        $job->salary = $this->salary;
        $job->category_id = $this->categoryId;
        $job->duration = $this->duration;
        $job->hours = $this->hours;

        if ($this->image) {
            $imageName = time() . '.' . $this->image->extension();
            $this->image->storeAs('jobs', $imageName, 'uploads');
            $job->image = $imageName;
        }

        $job->save();
        session()->flash('message', 'Job has been added successfully');

        return redirect()->route('admin.jobs');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-job-component',['categories' => $categories])->layout('layouts.base');
    }
}
