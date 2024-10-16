<?php

namespace App\Http\Livewire\Admin;

use App\Models\JobApplication;
use Livewire\Component;
use Livewire\WithPagination;

class AdminJobApplicationComponent extends Component
{
    use WithPagination;

    public $status;

    // Function to change the status of the job application
    public function updateStatus($applicationId, $newStatus)
    {
        $application = JobApplication::find($applicationId);
        $application->status = $newStatus;
        $application->save();

        session()->flash('message', 'Application status updated successfully.');
    }

    public function render()
    {
        $applications = JobApplication::with('job')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.admin.admin-job-application-component', ['applications' => $applications])->layout('layouts.base');
    }
}
