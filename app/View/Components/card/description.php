<?php

namespace App\View\Components\card;

use App\Models\Ticket;
use Illuminate\View\Component;

class description extends Component
{
    public Ticket $ticket;
    
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    public function render()
    {
        return view('components.card.description');
    }
}
