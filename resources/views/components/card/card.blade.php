<div class="card border-light mb-3" id="Card#{{ $ticket->id }}" draggable="true" ondragstart="drag(event)">
    <small class="card-number">#{{ $ticket->id }}</small>

    <a class="fa fa-refresh card-refresh" href="#"></a>
    <div class="card-body">
        <h5 class="card-title">{{ $ticket->title }}</h5>
        
        <x-card.description :ticket="$ticket"/>

    </div>
    <div class="card-footer">{{ $getFooterToRender() }}</div>
</div>
