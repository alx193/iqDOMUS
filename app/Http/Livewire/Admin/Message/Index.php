<?php

namespace App\Http\Livewire\Admin\Message;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $message_id;
    

    public function render()
    {
        $messages = Message::orderBy('id', 'ASC')->paginate(10);

        return view('livewire.admin.message.index', ['messages' => $messages]);
    }
}
