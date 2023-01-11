<?php

namespace App\Http\Livewire\Admin\Solution;

use Livewire\Component;
use App\Models\Solution;
use Livewire\WithPagination;
use Livewire\WithPagnation;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $solutions = Solution::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.solution.index', ['solutions' => $solutions]);
    }
}
