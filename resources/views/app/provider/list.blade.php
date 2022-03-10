@extends('app.layouts.basicLayout')

@section('title', 'Fornecedor')

@section('content')

<div class="page-content">

    <div class="page-title-alt">
        <p>Listar Fornecedor</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.provider.create') }}">Novo</a></li>
            <li><a href="{{ route('app.provider') }}">Consulta</a></li>
        </ul>
    </div>
    <div class="page-info">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            ... Lista ...
        </div>
    </div>
</div>
@endsection