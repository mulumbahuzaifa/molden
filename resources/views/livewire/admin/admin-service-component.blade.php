<div>
    <div class="container pt-100 pb-100">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Services</div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addservice') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Service</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td><img src="{{ asset('uploads/services') }}/{{ $service->image }}" width="60" height="60" alt="{{ $service->name }}"></td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->desc }}</td>
                                        <td>{{ $service->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editservice', ['serviceId' => $service->id]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure you want to delete this service?') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{ $service->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $services->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
