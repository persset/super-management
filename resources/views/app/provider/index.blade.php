@extends('app.layouts.basicLayout')

@section('title', 'Fornecedor')

@section('content')

<div class="page-content">

    <div class="page-title-alt">
        <p>Fornecedor</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.provider.create') }}">Novo</a></li>
            <li><a href="{{ route('app.provider') }}">Consulta</a></li>
        </ul>
    </div>
    <div class="page-info">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="{{ route('app.provider.list') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Nome" class="black-border">
                <input type="text" name="site" placeholder="Site" class="black-border">
                <input type="text" name="uf" placeholder="UF" class="black-border">
                <input type="text" name="email" placeholder="Email" class="black-border">

                <button type="submit" class="black-border">Pesquisar</button>
            </form>
        </div>
    </div>
</div>
@endsection