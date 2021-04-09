@extends('layout.app', ["current" => "consultas"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Consultas</h5>
        @if(count($consultas) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Data</th>
                    <th>Sintomas</th>
                    <th>Tratamento</th>
                    <th>Exame</th>
                    <th>Descrição Exame</th>
                    <th>Dono</th>
                    <th>Animal</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consultas as $con)
                <tr>
                    <td>{{$con->id}}</td>
                    <td>{{$con->data}}</td>
                    <td>{{$con->sintomas}}</td>
                    <td>{{$con->tratamento}}</td>
                    <td>{{$con->exame}}</td>
                    <td>{{$con->descExame}}</td>
                    <td>{{$con->clientes->nome}}</td>
                    <td>{{$con->animais->nome}}</td>
                    <td class="row">
                        <a style="margin-bottom: 15px; margin-right: 5px;" href="{{ route('consultas.edit', $con['id']) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('consultas.destroy', $con['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="30">Nenhuma Consulta Cadastrada</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="/consultas/create" class="btn btn-sm btn-primary" role="button">Nova Consulta</a>
    </div>
</div>
@endsection