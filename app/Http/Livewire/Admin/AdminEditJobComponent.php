<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Job;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditJobComponent extends Component
{
    use WithFileUploads;
    public $job_id, $title, $company, $description, $location, $salary, $categoryId, $image, $newImage, $duration, $hours;

    protected $rules = [
        'title' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'description' => 'required|string',
        'location' => 'required|string|max:255',
        'salary' => 'required|numeric|min:0',
        'categoryId' => 'required|exists:categories,id', // Validate categoryId
        'duration' => 'required|string|max:255',
        'hours' => 'required|string|max:255',
    ];

    public function mount($job_id)
    {
        $job = Job::findOrFail($job_id);
        $this->job_id = $job->id;
        $this->title = $job->title;
        $this->company = $job->company;
        $this->description = $job->description;
        $this->location = $job->location;
        $this->salary = $job->salary;
        $this->image = $job->image;
        $this->categoryId = $job->category_id; // Set the categoryId
        $this->duration = $job->duration;
        $this->hours = $job->hours;
    }

    public function updateJob()
    {
        $this->validate();

        $job = Job::find($this->job_id);
        $job->title = $this->title;
        $job->company = $this->company;
        $job->description = $this->description;
        $job->location = $this->location;
        $job->salary = $this->salary;
        $job->category_id = $this->categoryId;
        $job->duration = $this->duration;
        $job->hours = $this->hours;
        if ($this->newImage) {
            $imageName = time() . '.' . $this->newImage->extension();
            $this->newImage->storeAs('jobs', $imageName, 'uploads');
            $job->image = $imageName;
        }

        $job->save();

        session()->flash('message', 'Job has been updated successfully');

        return redirect()->route('admin.jobs'); // Adjust the route name as needed
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-job-component', ['categories' => $categories])->layout('layouts.base');
    }
}
