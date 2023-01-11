<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageFormRequest;

class MessageController extends Controller
{
    public function index() {

        // $messages = Message::all();
        //dd("esti pe index-ul message🫡");
        return view('admin.message.index');
    }

    public function show($id) {
        return Message::find($id);
    }

    public function create() {

        return view('admin.message.create');
    }

    public function store(MessageFormRequest $request) {

        $validatedData = $request ->validated();

        $message = new Message;
        $message->name = $validatedData['name'];
        $message->description = $validatedData['description']; 

        $message->save();

        return redirect('admin/message')->with('message', 'Mesaj creat cu succes!');
    }


    public function edit(Message $message ) { 

        return view('admin.message.edit', compact ('message'));
    }


    public function update(MessageFormRequest $request, $message) {

        $validatedData = $request->validated();

        $message = Message::findOrFail($message);

        $message->name = $validatedData['name'];
        $message->description = $validatedData['description'];
       
    
        $message->update();

        //dd('formular contact updatat🫡');

        return redirect('admin/message')->with('message', 'Mesaj actualizat cu success!');
    }






    public function destroy(int $message_id)
    {
        //dd ('ti-am sters produsul! 😃');

        $message = Message::findOrFail($message_id);
        $message->delete();
        return redirect()->back()->with('message','Mesaj sters!');
    }
}
