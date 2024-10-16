<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;

class AdminBlogComponent extends Component
{
    public function deleteBlog($id){
        $blog = Blog::find($id);
        $blog->delete();
        session()->flash('message', 'Blog has been deleted successfully');
    }

    public function render()
    {
        $blogs = Blog::paginate(12);
        return view('livewire.admin.admin-blog-component',['blogs'=> $blogs])->layout('layouts.base');
    }
}
