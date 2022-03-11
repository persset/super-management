@extends('app.layouts.basicLayout')

@section('title', 'Fornecedor')

@section('content')

<div class="page-content">

    <div class="page-title-alt">
        <p>Adicionar - Fornecedor</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.provider.create') }}">Novo</a></li>
            <li><a href="{{ route('app.provider') }}">Consulta</a></li>
        </ul>
    </div>
    <div class="page-info">
        {{ $msg ?? '' }}
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="{{ route('app.provider.create') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $provider->id ?? '' }}" />
                <!-- Subject to changes - placeholder solution-->
                <input type="text" name="name" placeholder="Nome" class="black-border"
                    value="{{ $provider->name ?? old('name') }}">
                {{ $errors->has('name') ? $errors->first() : ''}}
                <input type="text" name="site" placeholder="Site" class="black-border"
                    value="{{ $provider->site ?? old('site') }}">
                {{ $errors->has('site') ? $errors->first() : ''}}
                <input type="text" name="uf" placeholder="UF" class="black-border"
                    value="{{ $provider->uf ?? old('uf') }}">
                {{ $errors->has('uf') ? $errors->first() : ''}}
                <input type="text" name="email" placeholder="Email" class="black-border"
                    value="{{ $provider->email ?? old('email') }}">
                {{ $errors->has('email') ? $errors->first() : ''}}

                <button type="submit" class="black-border">Salvar</button>
            </form>
        </div>
    </div>
</div>
@endsection