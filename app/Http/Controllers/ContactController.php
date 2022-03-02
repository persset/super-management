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
        $request->validate([
            'name' => 'required|min:2|max:140',
            'phone' => 'required',
            'email' => 'required',
            'contact_subject' => 'required',
            'message' => 'required|max:2000'
        ]);

        SiteContact::create($request->all());
    }
}
