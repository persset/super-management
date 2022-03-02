<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main() {
        $contact_subjects = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];

        return view("site.main", ['contact_subjects' => $contact_subjects]);
    }
}
