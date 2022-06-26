@extends ('layouts.main')

@section('title', 'GAP Events')

@section('content')

<div class="col-md-12" id="search-container">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" class="form-control" id="search" name="search" placeholder="Procure um evento">
    </form>
</div>

<div class="col-md-12" id="events-container">
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div class="row" id="cards-container">
        
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">01/01/1999</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-partipantes">X Participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>  
        @endforeach
    
    </div>
</div>

@endsection 
        
