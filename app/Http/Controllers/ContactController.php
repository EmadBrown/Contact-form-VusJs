<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
Use ContactRequest;

class ContactController extends Controller
{
    public function fatchContact(){
        $contacts = Contact::latest()->orderBy('created_at' , 'desc')->get();
        return $contacts;
    }

    public function singleContact($id){
        return Contact::FindOrFaild($id);
    }

    public function addContact(ContactRequest $request){
        $contact = Contact::create($request->all());
    }

    public function updateContact(Request $request , $id){
        return Contact::FindOrFaild($id)->update($request->all());
    }

    public function delete($id){
        return Contact::FindOrFaild($id)->delete();
    }
}
