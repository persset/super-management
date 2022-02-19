@extends("site.layouts.basicLayout")

@section("title", 'Contato')

@section("content")

<div class="page-content">
    <div class="page-title">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="page-info">
        <div class="main-contact">
            @component("site.layouts._components.contactForm")
            @endcomponent
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