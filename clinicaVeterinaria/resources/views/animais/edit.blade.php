@extends('layout.app', ["current" => "animais"])
@section('body')
<div class="card border">
    <div class="card-body">
        <!--Configurar o actions para chamar o método update-->
        <form action="{{ route('animais.update', $ani['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="form-group col-md-2">
                    <label for="ani_nome">Nome</label>
                    <input type="text" class="form-control" name="ani_nome" id="ani_nome" placeholder="Digite aqui o nome" value="{{ $ani->nome }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_apelido">Apelido</label>
                    <input type="text" class="form-control" name="ani_apelido" id="ani_apelido" placeholder="Digite aqui o apelido" value="{{ $ani->apelido }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_raca">Raça</label>
                    <input type="text" class="form-control" name="ani_raca" id="ani_raca" placeholder="Digite aqui a raça" value="{{ $ani->raca }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_especie">Especie</label>
                    <input type="text" class="form-control" name="ani_especie" id="ani_especie" placeholder="Digite aqui a especie" value="{{ $ani->especie }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_peso">Peso</label>
                    <input type="numeric" class="form-control" name="ani_peso" id="ani_peso" placeholder="Digite aqui o peso" value="{{ $ani->peso }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_cor">Cor</label>
                    <input type="text" class="form-control" name="ani_cor" id="ani_cor" placeholder="Digite aqui a cor" value="{{ $ani->cor }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" name="ani_nascimento" id="ani_nascimento" value="{{ $ani->nascimento }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_doenca">Doença</label>
                    <select class="form-control" name="ani_doenca" id="ani_doenca" value="{{ $ani->doenca }}">
                        @php($doenca = ['Sim'=>'Sim','Não'=>'Não'])
                        @foreach($doenca as $doe)
                        <option value="{{ $doe }}">{{ $doe }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_descDoenca">Descrição Doença</label>
                    <input type="text" class="form-control" name="ani_descDoenca" id="ani_descDoenca" placeholder="Digite qual a doença" value="{{ $ani->descDoenca }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_cirurgia">Cirurgia</label>
                    <select class="form-control" name="ani_cirurgia" id="ani_cirurgia">
                        @php($cirurgia = ['Sim'=>'Sim','Não'=>'Não'])
                        @foreach($cirurgia as $cir)
                        <option value="{{ $cir }}">{{ $cir }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_descCirurgia">Descrição Cirurgia</label>
                    <input type="text" class="form-control" name="ani_descCirurgia" id="ani_descCirurgia" placeholder="Digite qual a cirurgia" value="{{ $ani->descCirurgia }}">
                </div>

                <input type="hidden" class="form-control" name="clientes_id" id="clientes_id" value="{{ $ani->clientes_id }}">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/animais" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection