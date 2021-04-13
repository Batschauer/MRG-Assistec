<?php

namespace App\View\Components\card;

use DateTime;
use App\Models\Ticket;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class card extends Component
{
    public Ticket $ticket;

    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    public function getComponentToRender()
    {
        /*if ($this->ticket->status == 'Aberto' || $this->ticket->status == 'Fechado')
        {*/
            return '<x-card.description :$this->ticket/>';
        /*}
        
        if ($this->ticket->status == 'Na fila' || $this->ticket->status == 'Em andamento')
        {
            return '<x-card.technicians :$this->ticket\>';
        }*/
    }

    public function getFooterToRender()
    {
        if ($this->ticket->status == 'Fechado')
            return 'Finalizado em ' .$this->ticket->closing_date;
        else
            return 'Aberto em ' .$this->ticket->opening_date;
    }

    public function render()
    {
        return view('components.card.card');
    }

    public function boot()
    {
        Blade::component('card', card::class);
    }
}
