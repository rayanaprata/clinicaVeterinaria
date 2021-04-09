@extends('layout.app', ["current" => "animais"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Animais</h5>
        @if(count($animais) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Raça</th>
                    <th>Especie</th>
                    <th>Peso</th>
                    <th>Cor</th>
                    <th>Data de Nascimento</th>
                    <th>Doença</th>
                    <th>Descrição Doença</th>
                    <th>Cirurgia</th>
                    <th>Descrição Cirurgia</th>
                    <th>Dono</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animais as $ani)
                <tr>
                    <td>{{$ani->id}}</td>
                    <td>{{$ani->nome}}</td>
                    <td>{{$ani->apelido}}</td>
                    <td>{{$ani->raca}}</td>
                    <td>{{$ani->especie}}</td>
                    <td>{{$ani->peso}}</td>
                    <td>{{$ani->cor}}</td>
                    <td>{{$ani->nascimento}}</td>
                    <td>{{$ani->doenca}}</td>
                    <td>{{$ani->descDoenca}}</td>
                    <td>{{$ani->cirurgia}}</td>
                    <td>{{$ani->descCirurgia}}</td>
                    <td>{{$ani->clientes->nome}}</td>
                    <td class="row">
                        <a style="margin-bottom: 15px; margin-right: 5px;" href="{{ route('animais.edit', $ani['id']) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('animais.destroy', $ani['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="30">Nenhuma Animal Cadastrado</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="/animais/create" class="btn btn-sm btn-primary" role="button">Novo Animal</a>
    </div>
</div>
@endsection