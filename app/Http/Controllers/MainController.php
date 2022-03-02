<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubject;

class MainController extends Controller
{
    public function main() {
        $contact_subjects = ContactSubject::all();

        return view("site.main", ['contact_subjects' => $contact_subjects]);
    }
}
