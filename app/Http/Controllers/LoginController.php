<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request) {
        $error = '';

        if($request->get('error') == 1) {
            $error = 'Parâmetros não batem com nenhum dado cadastrado.';
        }

        if($request->get('error') == 2) {
            $error = 'É necessário autenticação para acessar a página.';
        }
        
        return view('site.login', ['error' => $error]);
    }

    public function login(Request $request) {
        //Validation rules
        $rules = [
            'username' => 'email',
            'password' => 'required',
        ];

        //Validation feedback messages
        $feedback = [
            'username.email' => 'O campo email é obrigatório',
            'password.required' => 'O campo senha é obrigatório',
        ];

        $request->validate($rules, $feedback);

        //Retrieve form data
        $email = $request->get('username');
        $password = $request->get('password');

        //Initiate  User Model object
        $userModel = new User();

        $user = $userModel->where('email', $email)->where('password', $password)->get()->first();
        
        if(isset($user->name)) {
            session_start();
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['error' => 1]);
        }
    }

    public function logout() {
        session_destroy();

        return redirect()->route('site.index');
    }
}
