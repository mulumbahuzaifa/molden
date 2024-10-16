<?php

namespace App\Http\Livewire\Admin;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class AdminJobComponent extends Component
{
    use WithPagination;

    public function deleteJob($id){
        $job = Job::find($id);
        $job->delete();
        session()->flash('message', 'Job has been deleted successfully');
    }
    public function render()
    {
        $jobs = Job::paginate(12);
        return view('livewire.admin.admin-job-component', ['jobs' => $jobs])->layout('layouts.base');
    }
}
