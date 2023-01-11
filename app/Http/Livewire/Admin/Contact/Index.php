<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $contact_id;
    

    public function render()
    {
        $contacts = Contact::orderBy('id', 'ASC')->paginate(10);

        return view('livewire.admin.contact.index', ['contacts' => $contacts]);
    }
}
