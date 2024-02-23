<x-layout title="Area Personale - Presto.it" class="dashboard-background"> 
    
    
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 pt-5">
                <h1 class="my-5">Benvenuto nella tua area personale!</h1>
                <h4 class="my-5">Qui puoi visualizzare i tuoi annunci</h4>
            </div>
            
            @forelse ($announcements as $announcement)
            <div class="col-12 col-md-6">
                <div class="card mb-3 card-dashboard" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if($announcement->images)
                            <div class="carousel-inner text-center">
                                @foreach ( $announcement->images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <img src="{{$image->getUrl(300,300)}}" class="img-fluid p-3 rounded" alt="">
                                </div>
                                @endforeach
                            </div>
                            @else
                            <img src="https://picsum.photos/100" class="d-block w-100" alt="...">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-truncate">{{$announcement->name}}</h5>
                                <p class="card-text"><small>{{$announcement->category->name}}</small></p>
                                <p class="card-text"><small>€ {{$announcement->price}}</small></p>
                                <p class="card-text"><small>Inserito da: {{$announcement->user->name}}</small></p>
                                <p class="card-text"><small class="text-body-secondary">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <h2>Attualmente, non hai annunci in vendita</h2>
            <h3>BOTTONE VENDI ANNUNCIO</h3>
            @endforelse
            
            
            {{-- <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Annunci accettati
                        </button>
                    </h2>
                    
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @forelse ($announcements as $announcement)
                            <div class="col-12 col-md-6">
                                <div class="collapse-show" id="collapseExample">
                                    <div class="row g-0 bg-body-secondary position-relative">
                                        <div class="col-md-6 mb-md-0 p-md-4">
                                            @if($announcement->images)
                                            <div class="carousel-inner text-center">
                                                @foreach ( $announcement->images as $image)
                                                <div class="carousel-item @if($loop->first) active @endif">
                                                    <img src="{{$image->getUrl(300,300)}}" class="img-fluid p-3 rounded" alt="">
                                                </div>
                                                @endforeach
                                            </div>
                                            @else
                                            <img src="https://picsum.photos/100" class="d-block w-100" alt="...">
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-6 p-4 ps-md-0">
                                            <p class="card-title pb-2 text-truncate">{{$announcement->name}}</p>
                                            <p class="card-title pb-2">{{$announcement->category->name}}</p>
                                            <p class="card-text pt-2">€ {{$announcement->price}}</p>
                                            <p class="card-text mt-3">Inserito da: {{$announcement->user->name}}</p>
                                            <p class="card-title">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                                            <a href="#" class="">Dettaglio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h2>Attualmente, non hai annunci in vendita</h2>
                            <h3>BOTTONE VENDI ANNUNCIO</h3>
                            @endforelse
                        </div>
                    </div>
                    
                </div>
            </div> --}}
            
        </div>
        <div>
            {{$announcements->links()}}
        </div>
    </div>
    
    {{-- {{$images->getUrl(300,300)}} --}}
</x-layout>