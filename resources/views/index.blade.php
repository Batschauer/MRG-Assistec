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
                    <h5 class="card-title">Cadastro de Técnicos</h5>
                    <p class="card=text">
                        Cadastre novos técnicos
                    </p>
                    <a href="/technicians/create" class="btn btn-primary">Cadastre novos técnicos</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Abrir Chamado</h5>
                    <p class="card=text">
                        Abrir um novo chamado.
                    </p>
                    <a href="/tickets/create" class="btn btn-primary">Abrir um novo chamado</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection