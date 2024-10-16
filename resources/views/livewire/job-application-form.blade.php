<div class="job-application-form">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" wire:model="name" id="name" class="form-control">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" wire:model="email" id="email" class="form-control">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="name">Your Contact</label>
            <input type="text" wire:model="phone" id="phone" class="form-control">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="resume">Upload Resume</label>
            <input type="file" wire:model="resume" id="resume" class="form-control">
            @error('resume') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="message">Additional Message (Optional)</label>
            <textarea wire:model="message" id="message" class="form-control" rows="4"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="hiredots-btn">Submit Application</button>
    </form>
</div>
