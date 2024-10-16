<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobsComponent extends Component
{
    use WithPagination;

    public $search;
    public $location;
    public $categoryId;
    public $minSalary;
    public $maxSalary;

    protected $updatesQueryString = ['search', 'location', 'categoryId', 'minSalary', 'maxSalary'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingLocation()
    {
        $this->resetPage();
    }

    public function updatingCategoryId()
    {
        $this->resetPage();
    }

    public function updatingMinSalary()
    {
        $this->resetPage();
    }

    public function updatingMaxSalary()
    {
        $this->resetPage();
    }


    public function render()
    {
        // Build the query based on the filters and search term
        $jobs = Job::where('title', 'like', '%' . $this->search . '%')
            ->when($this->location, function ($query) {
                $query->where('location', 'like', '%' . $this->location . '%');
            })
            ->when($this->categoryId, function ($query) {
                $query->where('category_id', $this->categoryId);
            })
            ->when($this->minSalary, function ($query) {
                $query->where('salary', '>=', $this->minSalary);
            })
            ->when($this->maxSalary, function ($query) {
                $query->where('salary', '<=', $this->maxSalary);
            })
            ->paginate(12);

            $categories = Category::all();

        return view('livewire.jobs-component', ['jobs' => $jobs, 'categories' => $categories])->layout('layouts.base');
    }
}
