@extends('layout.app', ["current" => "customers"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cus_name">Nome do Cliente</label>
                <input type="text" class="form-control {{ $errors->has('cus_name') ? 'is-invalid' : '' }}" name="cus_name" id="cus_name" placeholder="">
                @if($errors->has('cus_name'))
                <div class="invalid-feedback">
                    {{ $errors->first('cus_name') }}
                </div>
                @endif
                <br>

                <label for="cus_birthday">Data de Nascimento</label>
                <input type="date" class="form-control" name="cus_birthday" id="cus_birthday">
                <br>

                <label for="cus_phone">Número de Telefone</label>
                <input type="tel" class="form-control" name="cus_phone" id="cus_phone" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" placeholder="(00) 00000-0000">
                <br>

                <label for="cus_email">E-mail</label>
                <input type="email" class="form-control" name="cus_email" id="cus_email" placeholder="algumacoisa@mail.com">
                <br>

                <label for="cus_address">Endereço</label>
                <input type="text" class="form-control" name="cus_address" id="cus_address" placeholder="Rua Quatro, 5">
                <br>

                <label for="cus_zip_code">CEP</label>
                <input type="text" class="form-control" name="cus_zip_code" id="cus_zip_code" pattern="[0-9]{5}[0-9]{3}" placeholder="00000-000">
                <br>

                <label for="cus_city">Cidade</label>
                <input type="text" class="form-control" name="cus_city" id="cus_city">
                <br>

                <label for="cus_state">Estado</label>
                <select name="cus_state" id="cus_state">
                    @php($states = ['AC'=>'AC','AM'=>'AM','AL'=>'AL','AP'=>'AP','BA'=>'BA','CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA','MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB','PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN','RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE','SP'=>'SP','TO'=>'TO'])
                    @foreach($states as $state)
                    <option value="{{ $state }}">{{ $state }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
<div class="card border">
    @if($errors->any())
        <div class="card-footer">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
        </div>
    @endif
</div>
@endsection