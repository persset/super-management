<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('site.login');
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

        echo "Username: $email | Senha: $password";
        echo '<br />';

        //Initiate  User Model object
        $user = new User();

        $exists = $user->where('email', $email)->where('password', $password)->get()->first();
        
        if(isset($exists->name)) {
            echo 'Usuário existe';
        } else {
            echo 'Usuário não existe';
        }
    }
}
