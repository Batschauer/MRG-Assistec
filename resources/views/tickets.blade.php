<?php use App\Http\Controllers\TicketsController; ?>

@extends('layout.app', ['current' => 'tickets'])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Chamados</h5>
        @if(count($tickets) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Prioridade</th>
                    <th>Data de Abertura</th>
                    <th>Data de Encerramento</th>
                    <th>Cliente</th>
                    <th>Técnico</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $tic)
                <tr>
                    <td> {{ $tic->id }}</td>
                    <td> {{ $tic->title }}</td>
                    <td> {{ $tic->description }}</td>
                    <td> {{ $tic->status }}</td>
                    <td> {{ $tic->priority }}</td>
                    <td> {{ $tic->opening_date }}</td>
                    <td> {{ $tic->closing_date }}</td>
                    <td> {{ TicketsController::getCustomerName($tic['id']) }}</td>
                    <td> {{ TicketsController::getTechnicianName($tic['id']) }}</td>
                    <td>
                        <a href="{{ route('tickets.edit', $tic['id']) }}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{ route('tickets.destroy', $tic['id']) }}" method="POST">
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
<div class="card-footer">
    <a href="/tickets/create" class="btn bt-sm btn-primary" role="button">Abrir Chamado</a>
</div>
@endsection