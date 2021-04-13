@extends('layout.app', ["current" => "tickets"])
@section('body')
<div>
    <div>
        <!--Configurar o actions para chamar o método update-->
        <form action="{{ route('tickets.update', $tic['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tic_title">Título</label>
                <input type="text" class="form-control" name="tic_title" id="tic_title" placeholder="">
                <br>

                <label for="tic_description">Descrição</label>
                <input type="text" class="form-control" name="tic_description" id="tic_description" placeholder="">
                <br>

                <label for="tic_status">Status</label>
                <select name="tic_status" id="tic_status">
                    @php($status = ['Aberto'=>'Aberto','Na fila'=>'Na fila','Em andamento'=>'Em andamento','Fechado'=>'Fechado'])
                    @foreach($status as $sta)
                    <option value="{{ $sta }}">{{ $sta }}</option>
                    @endforeach
                </select>
                <br>
                
                <label for="tic_priority">Prioridade</label>
                <select name="tic_priority" id="tic_priority">
                    @php($priorities = [1=>1,2=>2,3=>3,4=>4,5=>5])
                    @foreach($priorities as $priority)
                    <option value="{{ $priority }}">{{ $priority }}</option>
                    @endforeach
                </select>
                <br>

                <label for="tic_opening_date">Data de Abertura</label>
                <input type="date" class="form-control" name="tic_opening_date" id="tic_opening_date">
                <br>

                <label for="tic_closing_date">Data de Encerramento</label>
                <input type="date" class="form-control" name="tic_closing_date" id="tic_closing_date">
                <br>

                <label for="tic_customer_id">ID Cliente</label>
                <input type="text" class="form-control" name="tic_customer_id" id="tic_customer_id">
                <br>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/tickets" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection