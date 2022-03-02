<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactSubject;

class ContactSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactSubject::create(['subject' => 'Dúvida']);
        ContactSubject::create(['subject' => 'Elogio']);
        ContactSubject::create(['subject' => 'Reclamação']);
    }
}
