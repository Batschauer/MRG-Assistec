@extends('layout.app', ['current' => 'technicians'])

@section('body')
<div>
    <div>
        <h5 class="card-title">Cadastro de Técnicos</h5>
        @if(count($technicians) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Número de Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($technicians as $tec)
                <tr>
                    <td> {{ $tec->id }}</td>
                    <td> {{ $tec->name }}</td>
                    <td> {{ $tec->phone }}</td>
                    <td> {{ $tec->email }}</td>
                    <td>
                        <a href="{{ route('technicians.edit', $tec['id']) }}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{ route('technicians.destroy', $tec['id']) }}" method="POST">
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
    <a href="/technicians/create" class="btn bt-sm btn-primary" role="button">Novo Técnico</a>
</div>
@endsection