<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function index(){
        $contact = Contact::groupBy('phone')->paginate(20);
        // return response()->json($contact);
        return view('admins.contact.index',compact('contact'));
    }
    public function delete($id){
        $contactDel = Contact::find($id);
        $contactDel->delete();
        return redirect()->back();
    }
}
