@extends('layout.app', ["current" => "clientes"])

@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="row">
                
                <div class="form-group col-md-2">
                <label for="cli_nome">Nome</label>
                <input type="text" class="form-control" name="cli_nome" id="cli_nome" placeholder="Digite aqui o nome">
                </div>

                <div class="form-group col-md-2">
                <label for="cli_telefone">Telefone</label>
                <input type="tel" class="form-control" name="cli_telefone" id="cli_telefone" pattern="\(\d{2}\)\d{5}-\d{4}" title='Formato: "(99)9999-9999"' placeholder="Digite aqui o telefone">
                </div>

                <div class="form-group col-md-2">
                <label for="cli_email">E-mail</label>
                <input type="text" class="form-control" name="cli_email" id="cli_email" placeholder="Digite aqui o email">
                </div>

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/clientes" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>

@endsection