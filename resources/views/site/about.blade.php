@extends('site.layouts.basicLayout')

@section('content')
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
        <h1>Olá, eu sou o Super Gestão</h1>
    </div>

    <div class="page-info">
        <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios
            da sua empresa.</p>
        <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
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