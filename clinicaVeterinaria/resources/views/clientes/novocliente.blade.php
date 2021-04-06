@extends('layout.app', ["current" => "clientes"])

@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                
                <label for="cli_nome">Nome</label>
                <input type="text" class="form-control" name="cli_nome" id="cli_nome" placeholder="Digite aqui o nome">
                <br>

                <label for="cli_telefone">Telefone</label>
                <input type="tel" class="form-control" name="cli_telefone" id="cli_telefone" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" placeholder="Digite aqui o telefone">
                <br>

                <label for="cli_email">E-mail</label>
                <input type="text" class="form-control" name="cli_email" id="cli_email" placeholder="Digite aqui o email">
                <br>

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>

@endsection