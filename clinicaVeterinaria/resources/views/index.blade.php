@extends('layout.app', ['current' => 'home'])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row" id="menuzinho">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Clientes</h5>
                    <p class="card=text">
                        Cadastre novos clientes
                    </p>
                    <a href="/clientes/create" class="btn btn-primary">Cadastrar novos clientes</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Animais</h5>
                    <p class="card=text">
                        Cadastre novos animais
                    </p>
                    <a href="/animais/create" class="btn btn-primary">Cadastrar novos animas</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Nova Consulta</h5>
                    <p class="card=text">
                        Iniciar uma consulta
                    </p>
                    <a href="/consultas/create" class="btn btn-primary">Iniciar uma nova consulta</a>
                </div>
            </div>
        </div>
    </div>
</div>
<figure>
  <img src="img/pet.png" alt="Clinica Veterinaria" style="width: 100%">
</figure>
@endsection