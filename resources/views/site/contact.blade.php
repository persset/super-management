@extends("site.layouts.basicLayout")

@section("content")
<div class="header">

    <div class="logo">
        <img src={{ asset("img/logo.png") }}>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('site.index') }}">Principal</a></li>
            <li><a href="{{ route('site.about') }}">Sobre Nós</a></li>
            <li><a href="{{ route('site.contact') }}">Contato</a></li>
        </ul>
    </div>
</div>

<div class="page-content">
    <div class="page-title">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="page-info">
        <div class="main-contact">
            <form>
                <input type="text" placeholder="Nome" class="black-border">
                <br>
                <input type="text" placeholder="Telefone" class="black-border">
                <br>
                <input type="text" placeholder="E-mail" class="black-border">
                <br>
                <select class="black-border">
                    <option value="">Qual o motivo do contato?</option>
                    <option value="">Dúvida</option>
                    <option value="">Elogio</option>
                    <option value="">Reclamação</option>
                </select>
                <br>
                <textarea class="black-border">Preencha aqui a sua mensagem</textarea>
                <br>
                <button type="submit" class="black-border">ENVIAR</button>
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