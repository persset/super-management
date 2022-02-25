<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContact;

class SiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new SiteContact();
        $contact->name = 'Sistema SG';
        $contact->phone = '(11) 91234-5678';
        $contact->email = 'contato@sg.com.br';
        $contact->contact_subject = '1';
        $contact->message = 'Bem-vindo ao sistema Super Gestão';
        $contact->save();
    }
}
