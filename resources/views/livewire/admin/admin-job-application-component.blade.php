<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5 mb-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"> <h3>All Job Applications</h3> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Job Title</th>
                                    <th>Applicant Name</th>
                                    <th>Email</th>
                                    <th>Resume</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @if ($applications->count() > 0)
                                @foreach ($applications as $application)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $application->job->title }}</td>
                                        <td>{{ $application->name }}</td>
                                        <td>{{ $application->email }}</td>
                                        <td>
                                            <a href="{{ asset('uploads/' . $application->resume) }}" target="_blank">View Resume</a>
                                        </td>
                                        <td>{{ $application->message }}</td>
                                        <td>
                                            <select wire:change="updateStatus({{ $application->id }}, $event.target.value)" class="form-control {{ $application->status }}-status">
                                                <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="approved" {{ $application->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                            </select>
                                        </td>
                                        <td>{{ $application->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure, you want to delete this application?') || event.stopImmediatePropagation()" wire:click.prevent="deleteApplication({{ $application->id }})" style="margin-left: 20px">
                                                <i class="fa fa-times fa-2x text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9" class="text-center">No applications found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $applications->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
