@extends('layout.app', ["current" => "clientes"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Clientes</h5>
        @if(count($clientes) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cli)
                <tr>
                    <td>{{$cli->id}}</td>
                    <td>{{$cli->nome}}</td>
                    <td>{{$cli->telefone}}</td>
                    <td>{{$cli->email}}</td>
                    <td class="row">
                        <a style="margin-bottom: 15px; margin-right: 5px;" href="{{ route('clientes.edit', $cli['id']) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('clientes.destroy', $cli['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="30">Nenhum Cliente Cadastrado</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="/clientes/create" class="btn btn-sm btn-primary" role="button">Novo Cliente</a>
    </div>
</div>
@endsection