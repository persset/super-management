<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;

class ContactController extends Controller
{
    public function contact() {
        //var_dump($_POST);
        return view('site.contact');
    }

    public function saveContact(Request $request) {
        $contact = new SiteContact();

        /*$contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->contact_subject = $request->input('contact_subject');
        $contact->message = $request->input('message');

        $contact->save();*/

        $contact->fill($request->all());
        //$contact->create($request->all());
        $contact->save();

        return view('site.contact');
    }
}
