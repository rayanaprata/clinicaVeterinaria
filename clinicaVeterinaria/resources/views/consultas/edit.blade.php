@extends('layout.app', ["current" => "consultas"])
@section('body')
<div class="card border">
    <div class="card-body">
        <!--Configurar o actions para chamar o método update-->
        <form action="{{ route('consultas.update', $con['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="form-group col-md-2">
                    <label for="con_data">Data da Consulta</label>
                    <input type="date" class="form-control" name="con_data" id="con_data" value="{{ $con->data }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="con_sintomas">Sintomas</label>
                    <input type="text" class="form-control" name="con_sintomas" id="con_sintomas" placeholder="Digite aqui os sintomas" value="{{ $con->sintomas }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="con_tratamento">Tratamento</label>
                    <input type="text" class="form-control" name="con_tratamento" id="con_tratamento" placeholder="Digite aqui o tratamento" value="{{ $con->tratamento }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="con_exame">Exame</label>
                    <select class="form-control" name="con_exame" id="con_exame" value="{{ $con->exame }}">
                        @php($exame = ['Sim'=>'Sim','Não'=>'Não'])
                        @foreach($exame as $exa)
                        <option value="{{ $exa }}">{{ $exa }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="con_descExame">Descrição Exame</label>
                    <input type="text" class="form-control" name="con_descExame" id="con_descExame" placeholder="Digite a descrição do exame" value="{{ $con->descExame }}">
                </div>

                <input type="hidden" class="form-control" name="animais_id" id="animais_id" value="{{ $con->animais_id }}">

            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/consultas" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection