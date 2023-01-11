<?php

namespace App\Http\Controllers;

use App\Models\Contact_Forms;
use Illuminate\Http\Request;

class Contact_FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'contact';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Contact_Forms::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Contact_Forms::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Contact_Forms::where('id', $id)->exists()){
            $contact_form = Contact_Forms::find($id);
            $contact_form ->name = $request->name;
            $contact_form ->email = $request->email;
            $contact_form ->phone = $request->phone;   
            $contact_form ->solution = $request->solution;   
            $contact_form ->message = $request->message;   
            $contact_form ->status = $request->status;   
            
            $contact_form->save();
            return response()->json([
                "message" => "record updated successfully"
            ], 200);
        }else{
            return response()->json([
                "message" => "record not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
