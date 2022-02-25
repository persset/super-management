<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Using object instances
        $provider = new Provider();
        $provider->name = "Provider 100";
        $provider->site = "Prov100.com.br";
        $provider->uf = "MG";
        $provider->email = "prov100@test.com";
        $provider->save();

        //Using the static method create (remember to define the $fillable columns on your model)
        Provider::Create([
            'name' => 'Fornecedor 2',
            'site' => 'Prov2.com.br',
            'uf' => 'RJ',
            'email' => 'prov2@prov.com'
        ]);

        //Using insert, calling up the database method and pointing out the target table
        //The backslash will escape laravel facades that will try to find the DB method inside the seeders folder
        //This method will not pass through some Eloquent validations and as such will not auto generate the dates for the timestamps columns
        \DB::table('providers')->insert([
            'name' => 'Provider 3',
            'site' => 'provider3.com.br',
            'uf' => 'RS',
            'email' => 'prov3@provs.com'
        ]);
    }
}
