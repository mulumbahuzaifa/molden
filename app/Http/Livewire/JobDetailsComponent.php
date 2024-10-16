<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    public $jobId;

    public function mount($jobId){
        // Set the service ID on mount
        $job = Job::where('id', $jobId)->first();
        $this->jobId = $job->id;
    }
    public function render()
    {
        $job = Job::where('id', $this->jobId)->first();
        $relatedJobs = Job::where('category_id', $job->category_id)->where('id', '!=', $job->id)->take(6)->get();
        return view('livewire.job-details-component', ['job' => $job, 'relatedJobs' => $relatedJobs])->layout('layouts.base');
    }
}
