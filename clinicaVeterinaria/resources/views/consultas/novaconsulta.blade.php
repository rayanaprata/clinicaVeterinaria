@extends('layout.app', ["current" => "clientes"])

@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="form-group">

                <label for="cli_data">Data da Consulta</label>
                <input type="date" class="form-control" name="cli_data" id="cli_data">
                <br>

                <label for="cli_sintomas">Sintomas</label>
                <input type="text" class="form-control" name="cli_sintomas" id="cli_sintomas" placeholder="Digite aqui os sintomas">
                <br>

                <label for="cli_tratamento">Tratamento</label>
                <input type="text" class="form-control" name="cli_tratamento" id="cli_tratamento" placeholder="Digite aqui o tratamento">
                <br>

                <label for="cli_exame">Exame</label>
                <select name="cli_exame" id="cli_exame">
                    @php($exame = ['Sim'=>'Sim','Não'=>'Não'])
                    @foreach($exame as $exa)
                    <option value="{{ $exa }}">{{ $exa }}</option>
                    @endforeach
                </select>
                <br>

                <label for="cli_descExame">Descrição Doença</label>
                <input type="text" class="form-control" name="cli_descExame" id="cli_descExame" placeholder="Digite a descrição do exame">
                <br>

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>

@endsection