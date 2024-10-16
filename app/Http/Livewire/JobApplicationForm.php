<?php

namespace App\Http\Livewire;

use App\Models\JobApplication;
use Livewire\Component;
use Livewire\WithFileUploads;

class JobApplicationForm extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $resume;
    public $message;
    public $jobId;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'resume' => 'required|mimes:pdf,doc,docx|max:5120', // Restrict resume formats
        'message' => 'nullable|string',
    ];

    public function mount($jobId)
    {
        $this->jobId = $jobId;
    }

    public function submit()
    {
        $this->validate();

        // Handle resume upload
        $resumePath = $this->resume->store('resumes', 'uploads');

        // Save the application data
        JobApplication::create([
            'job_id' => $this->jobId,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'resume' => $resumePath,
            'message' => $this->message,
        ]);

        // Optionally, send an email notification or other processing logic here.

        // Reset form fields
        $this->reset(['name', 'email', 'phone', 'resume', 'message']);

        session()->flash('success', 'Your application has been submitted successfully!');
    }
    public function render()
    {
        return view('livewire.job-application-form');
    }
}
