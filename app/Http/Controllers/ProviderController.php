<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Provider;

class ProviderController extends Controller {
    public function index() {
        return view('app.provider.index');
    }

    public function list(Request $request) {

        $providers = Provider::where('name', 'like', '%'.$request->input('name').'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('uf', 'like', '%'.$request->input('uf').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->get();

        return view('app.provider.list', ['providers' => $providers]);
    }

    public function create(Request $request) {
        $msg = '';

        if($request->input('_token') != '') {
            $rules = [
                'name' => 'required|min:2',
                'site' => 'required',
                'uf' => 'required|max:2|min:2',
                'email' => 'email',    
            ];

            $feedback = [
                'required' => 'O campo é obrigatório',
                'nome.min' => 'O campo nome deve ter no mínimo 2 caracteres',
                'uf.min.max' => 'O campo UF deve ter 2 caracteres',
                'uf.max' => 'O campo UF deve ter 2 caracteres',
                'email.email' => 'Por favor insira um email válido',
            ];

            $request->validate($rules, $feedback);

            $providerModel = new Provider();
            $providerModel->create($request->all());

            $msg = "Cadastro realizado com sucesso!";
        }
        return view('app.provider.create', ['msg' => $msg]);
    }
}
