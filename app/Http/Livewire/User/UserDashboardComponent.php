<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\JobApplication;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $applications = JobApplication::where('email', auth()->user()->email)
            ->with('job')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.user.user-dashboard-component', ['applications' => $applications])
            ->layout('layouts.base');
    }

    public function getStatusBadgeClass($status)
    {
        return match (strtolower($status)) {
            'pending' => 'bg-warning text-dark',
            'approved' => 'bg-success',
            'rejected' => 'bg-danger',
            default => 'bg-secondary',
        };
    }
}
