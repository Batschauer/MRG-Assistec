@extends('layout.app', ['current' => 'home'])

@section('body')
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Clientes</h5>
                    <p class="card=text">
                        Cadastre novos clientes
                    </p>
                    <a href="/customers/create" class="btn btn-primary">Cadastre novos clientes</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Abrir Chamado</h5>
                    <p class="card=text">
                        Abrir um novo chamado.
                    </p>
                    <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection