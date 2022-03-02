<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;
use App\Models\ContactSubject;

class ContactController extends Controller
{
    public function contact() {
        //var_dump($_POST);

        $contact_subjects = ContactSubject::all();

        return view('site.contact', ['contact_subjects' => $contact_subjects]);
    }

    public function saveContact(Request $request) {
        $request->validate([
            'name' => 'required|min:2|max:140',
            'phone' => 'required',
            'email' => 'email',
            'contact_subject_id' => 'required',
            'message' => 'required|max:2000'
        ]);

        SiteContact::create($request->all());
        return redirect()->route('site.index');
    }
}
