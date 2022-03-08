@extends("site.layouts.basicLayout")

@section("title", 'Super Gestão - Login')

@section("content")

<div class="page-content">
    <div class="page-title">
        <h1>Login</h1>
    </div>

    <div class="page-info">
        <div style="width:30%; margin-left:auto; margin-right:auto;">
            <form action="{{ route('site.login') }}" method="post">
                @csrf
                <input type="text" name="username" placeholder="Usuário" value="{{ old('username') }}"
                    class="black-border">
                {{ $errors->has('username') ? $errors->first('username') : '' }}
                <input type="password" name="password" placeholder="Senha" class="black-border">
                {{ $errors->has('password') ? $errors->first('password') : '' }}
                <button type="submit" class="black-border">Acessar</button>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <div class="social-network">
        <h2>Redes sociais</h2>
        <img src={{ asset("img/facebook.png") }}>
        <img src={{ asset("img/linkedin.png") }}>
        <img src={{ asset("img/youtube.png") }}>
    </div>
    <div class="contact-area">
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localization">
        <h2>Localização</h2>
        <img src={{ asset("img/mapa.png") }}>
    </div>
</div>
@endsection