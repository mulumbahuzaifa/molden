<div class="container mt-4">
    <h2 class="mb-4">My Job Applications</h2>
    @if($applications->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Job Title</th>
                        <th>Application Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $application)
                        <tr>
                            <td>{{ $application->job->title }}</td>
                            <td>{{ $application->created_at->format('Y-m-d') }}</td>
                            <td>
                                <span class="badge {{ $this->getStatusBadgeClass($application->status) }}">
                                    {{ ucfirst($application->status) }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="alert alert-info">You haven't submitted any job applications yet.</p>
    @endif
</div>
