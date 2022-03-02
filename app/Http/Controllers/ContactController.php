<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;

class ContactController extends Controller
{
    public function contact() {
        //var_dump($_POST);

        $contact_subjects = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];

        return view('site.contact', ['contact_subjects' => $contact_subjects]);
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
