<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditBlogComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $author;
    public $content;
    public $image;
    public $newImage;
    public $blog_id;

    public function mount($blog_id){
        $blog = Blog::where('id', $blog_id)->first();
         $this->title =$blog->title;
         $this->author =$blog->author;
         $this->content =$blog->content;
         $this->image =$blog->image;
         $this->blog_id =$blog->id;
    }
    protected $rules = [
        'title' => 'required|string',
        'author' => 'required|string',
        'content' => 'required|string',
        'image' => 'image|max:5120', // 1MB Max
    ];

    public function updateBlog(){
        $this->validate();
        $blog = Blog::find($this->blog_id);
        $blog->title = $this->title;
        $blog->author = $this->author;
        $blog->content = $this->content;

        if ($this->newImage) {
            $imageName = time() . '.' . $this->newImage->extension();
            $this->newImage->storeAs('blogs', $imageName, 'uploads');
            $blog->image = $imageName;
        }

        $blog->save();
        session()->flash('message', 'Blog has been updated successfully');
        return redirect()->route('admin.blogs');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-blog-component')->layout('layouts.base');
    }
}
