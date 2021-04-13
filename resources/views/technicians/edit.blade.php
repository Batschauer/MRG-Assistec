@extends('layout.app', ["current" => "technicians"])
@section('body')
<div>
    <div>
        <!--Configurar o actions para chamar o método update-->
        <form action="{{ route('technicians.update', $tec['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tec_name">Nome do Técnico</label>
                <input type="text" class="form-control" name="tec_name" id="tec_name" placeholder="">
                <br>

                <label for="tec_phone">Número de Telefone</label>
                <input type="tel" class="form-control" name="tec_phone" id="tec_phone" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" placeholder="(00) 00000-0000">
                <br>

                <label for="tec_email">E-mail</label>
                <input type="email" class="form-control" name="tec_email" id="tec_email" placeholder="algumacoisa@mail.com">
                <br>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/technicians" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection