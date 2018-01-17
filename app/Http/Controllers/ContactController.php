<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function fatchContact(){
        return Contact::latest()->orderBy('created_at', 'desc')->get();
    }

    public function singleContact($id){
        return Contact::findOrFail($id);
    }

    public function addContact(ContactRequest $request){
        return Contact::create($request->all());
    }

    public function updateContact(ContactRequest $request , $id){
        Contact::findOrFail($id)->update(['name' => $request->input(['name']), 'email' => $request->input(['email']), 'phone' => $request->input(['phone'])]);
    }

    public function delete($id){
        return Contact::destroy($id);
    }
}
