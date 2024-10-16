<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $author;
    public $content;
    public $image;

    protected $rules = [
        'title' => 'required|string',
        'author' => 'required|string',
        'content' => 'required|string',
        'image' => 'image|max:5120', // 1MB Max
    ];

    public function addBlog()
    {
        $this->validate();

        $blog = new Blog();
        $blog->title = $this->title;
        $blog->author = $this->author;
        $blog->content = $this->content;

        if ($this->image) {
            $imageName = time() . '.' . $this->image->extension();
            $this->image->storeAs('blogs', $imageName, 'uploads');
            $blog->image = $imageName;
        }

        $blog->save();
        session()->flash('message', 'Blog has been added successfully');

        return redirect()->route('admin.blogs');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-blog-component')->layout('layouts.base');
    }
}
