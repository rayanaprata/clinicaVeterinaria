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
                    <input type="text" class="form-control" name="ani_nome" id="ani_nome" placeholder="Digite aqui o nome">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_apelido">Apelido</label>
                    <input type="text" class="form-control" name="ani_apelido" id="ani_apelido" placeholder="Digite aqui o apelido">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_raca">Raça</label>
                    <input type="text" class="form-control" name="ani_raca" id="ani_raca" placeholder="Digite aqui a raça">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_especie">Especie</label>
                    <input type="text" class="form-control" name="ani_especie" id="ani_especie" placeholder="Digite aqui a especie">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_peso">Peso</label>
                    <input type="numeric" class="form-control" name="ani_peso" id="ani_peso" placeholder="Digite aqui o peso">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_cor">Cor</label>
                    <input type="text" class="form-control" name="ani_cor" id="ani_cor" placeholder="Digite aqui a cor">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" name="ani_nascimento" id="ani_nascimento">
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_doenca">Doença</label>
                    <select class="form-control" name="ani_doenca" id="ani_doenca">
                        @php($doenca = ['Sim'=>'Sim','Não'=>'Não'])
                        @foreach($doenca as $doe)
                        <option value="{{ $doe }}">{{ $doe }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="ani_descDoenca">Descrição Doença</label>
                    <input type="text" class="form-control" name="ani_descDoenca" id="ani_descDoenca" placeholder="Digite qual a doença">
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
                    <input type="text" class="form-control" name="ani_descCirurgia" id="ani_descCirurgia" placeholder="Digite qual a cirurgia">
                </div>

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button href="/animais" type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection