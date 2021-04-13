<?php

use App\Http\Controllers\TicketsController;
use App\Http\View\Components\card\card;
?>

@extends('layout.app', ['current' => 'tickets'])

@section('body')
<div class="card-deck h-100 flex-container">

    <div class="card-columns h-100 w-25 p-3 border border-primary bg-dark" id="ColunaAberto" ondrop="drop(event)" ondragover="allowDrop(event)">
        <div class="card-columns-title" draggable="false">
            <h5 class="card-title">Abertos</h5>
            <a href="/tickets/create" class="btn btn-success btn-sm card-btn-add">+</a>
        </div>

    @if(count($tickets))
        @foreach($tickets[0] as $tkt)
            <x-card.card :ticket="$tkt"/>
        @endforeach
    @endif
    
    </div>

    <div class="card-columns h-100 w-25 p-3 border border-primary bg-dark" id="ColunaNaFila" ondrop="drop(event)" ondragover="allowDrop(event)">
        <div class="card-columns-title" draggable="false">
            <h5 class="card-title">Na fila</h5>
        </div>

    @if(count($tickets))
        @foreach($tickets[1] as $tkt)
            <x-card.card :ticket="$tkt"/>
        @endforeach
    @endif
    </div>

    <div class="card-columns h-100 w-25 p-3 border border-primary bg-dark" id="ColunaEmAtendimento" ondrop="drop(event)" ondragover="allowDrop(event)">
        <div class="card-columns-title" draggable="false">
            <h5 class="card-title">Em andamento</h5>
        </div>

    @if(count($tickets))
        @foreach($tickets[2] as $tkt)
            <x-card.card :ticket="$tkt"/>
        @endforeach
    @endif
    </div>

    <div class="card-columns h-100 w-25 p-3 border border-primary bg-dark" id="ColunaAtendido" ondrop="drop(event)" ondragover="allowDrop(event)">
        <div class="card-columns-title" draggable="false">
            <h5 class="card-title">Fechado</h5>
        </div>

    @if(count($tickets))
        @foreach($tickets[3] as $tkt)
            <x-card.card :ticket="$tkt"/>
        @endforeach
    @endif
    </div>
</div>
@endsection