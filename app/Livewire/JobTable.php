<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobTable extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.job-table', [
            'jobs' => Job::where('status', 'like', '%'.$this->search.'%')->paginate(5)
        ]);
    }
}
