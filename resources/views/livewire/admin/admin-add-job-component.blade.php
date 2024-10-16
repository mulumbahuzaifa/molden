<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5 mb-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Job
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="{{ route('admin.jobs') }}" style="color: whitesmoke" class="btn btn-success pull-right"> All Jobs</a>
                            </div>
                        </div>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    @endif
                    <div class="card-body">
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addJob">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Job Title</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Job Title" class="form-control input-md" wire:model="title">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Company</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Company Name" class="form-control input-md" wire:model="company">
                                    @error('company')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Description</label>
                                <div class="col-md-4">
                                    <textarea placeholder="Description" wire:model="description" class="form-control"></textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Location</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Location" class="form-control input-md" wire:model="location">
                                    @error('location')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Salary</label>
                                <div class="col-md-4">
                                    <input type="number" placeholder="Salary" class="form-control input-md" wire:model="salary">
                                    @error('salary')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Job Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="categoryId">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('categoryId')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Job Duration</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Duration" class="form-control input-md" wire:model="duration">
                                    @error('duration')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Job Working Hours</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Hours" class="form-control input-md" wire:model="hours">
                                    @error('hours')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Job Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                    @endif
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
