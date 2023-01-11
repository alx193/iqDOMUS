<?php

namespace App\Http\Livewire\Admin\Gallery;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $gallery_id;

    public function render()
    {
        $galleries = Gallery::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.gallery.index', ['galleries' => $galleries]);
    }
}
