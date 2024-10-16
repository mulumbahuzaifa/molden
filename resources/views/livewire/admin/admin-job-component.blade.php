<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5 mb-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"> <h3>All Jobs</h3></div>
                            <div class="col-md-6 text-end"><a href="{{ route('admin.addjob') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Job</a></div>
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Company</th>
                                    <th>Location</th>
                                    <th>Salary</th>
                                    <th>Duration</th>
                                    <th>Working Hours</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ $job->id }}</td>
                                        <td><img src="{{ asset('uploads/jobs') }}/{{ $job->image }}" width="60" height="60" alt="{{ $job->name }}"></td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->category->name }}</td>
                                        <td>{{ $job->company }}</td>
                                        <td>{{ $job->location }}</td>
                                        <td>{{ $job->salary }}</td>
                                        <td>{{ $job->duration }}</td>
                                        <td>{{ $job->hours }}</td>
                                        <td>{{ $job->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.editjob', ['job_id'=> $job->id]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this job') || event.stopImmediatePropagation()" wire:click.prevent="deleteJob({{ $job->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $jobs->links('pagination::bootstrap-4') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
