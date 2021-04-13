@extends('layout.app', ['current' => 'customers'])

@section('body')
<div>
    <div>
        <h5 class="card-title">Cadastro de Clientes</h5>
        @if(count($customers) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Número de Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $cus)
                <tr>
                    <td> {{ $cus->id }}</td>
                    <td> {{ $cus->name }}</td>
                    <td> {{ $cus->birthday }}</td>
                    <td> {{ $cus->phone }}</td>
                    <td> {{ $cus->email }}</td>
                    <td> {{ $cus->address }}</td>
                    <td> {{ $cus->zip_code }}</td>
                    <td> {{ $cus->city }}</td>
                    <td> {{ $cus->state }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $cus['id']) }}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{ route('customers.destroy', $cus['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
<div>
    <a href="/customers/create" class="btn bt-sm btn-primary" role="button">Novo Cliente</a>
</div>
@endsection