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

        $validationRules = [
            'name' => 'required|min:2|max:140',
            'phone' => 'required',
            'email' => 'email',
            'contact_subject_id' => 'required',
            'message' => 'required|max:2000'
        ];

        $validationErrorMessages = [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O campo nome precisa ter no mínimo 2 caracteres',
            'name.max' => 'O campo nome deve ter no máximo 140 caracteres',

            'email' => 'Por favor insira um endereço de email válido',

            'message.max' => 'O campo mensagem deve ter no máximo 2000 caracteres',

            'required' => 'O campo é obrigatório',
        ];

        $request->validate($validationRules, $validationErrorMessages);

        SiteContact::create($request->all());
        return redirect()->route('site.index');
    }
}
