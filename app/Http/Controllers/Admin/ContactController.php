<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function index() {
    
        return view('admin.contact.index');
    }

    public function create() {
    
        return view('admin.contact.create');
    }

    public function store(ContactFormRequest $request) {

        $validatedData = $request->validated();

        $contact = new Contact;
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->solution = $validatedData['solution'];
        $contact->message = $validatedData['message'];
        $contact->status = $request->status == true ? '1':'0';
    
        $contact->save();

        return redirect('admin/contact')->with('message', 'Contact adaugat cu success!');
    
    }

    public function edit(Contact $contact ) { 

        return view('admin.contact.edit', compact ('contact'));
    }

    public function update(ContactFormRequest $request, $contact) {

        $validatedData = $request->validated();

        $contact = Contact::findOrFail($contact);

        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->solution = $validatedData['solution'];
        $contact->message = $validatedData['message'];
        $contact->status = $request->status == true ? '1':'0';
    
        $contact->update();

        // dd('formular contact updatat🫡');

        return redirect('admin/contact')->with('message', 'Contact actualizat cu success!');
    }

    public function destroy(int $contact_id)
    {
        //dd ('ti-am sters produsul! 😃');

        $contact = Contact::findOrFail($contact_id);
        $contact->delete();
        return redirect()->back()->with('message','Formular de Contact sters!');
    }
}
