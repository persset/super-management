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
        <div style="width: 90%; margin-left: auto; margin-right: auto;">
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>UF</th>
                        <th>E-mail</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($providers as $provider)
                    <tr>
                        <td>{{ $provider->name }}</td>
                        <td>{{ $provider->site }}</td>
                        <td>{{ $provider->uf }}</td>
                        <td>{{ $provider->email }}</td>
                        <td><a href="{{ route('app.provider.edit', $provider->id) }}">Editar</a></td>
                        <td><a href="">Excluir</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection