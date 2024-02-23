<x-layout title="Area revisore">

    {{-- ! TITOLO --}}
    <div class="container-fluid">
        <div class="row">
            @if (session()->has('success'))
                <div class="col-12 alert alert-success mt-5">
                    <p class="pt-3">{{ session('success') }}</p>
                </div>
            @endif
            <div class="col-12 mt-5">
                <h1 class="pt-5 text-b text-center">
                    {{ $announcement_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
    </div>
    {{-- ? FINE TITOLO --}}


    @if ($announcement_to_check)
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 mt-3">
                    @if ($announcement_to_check->images)
                        <div class="container-fluid justify-content-center">
                            <div class="row justify-content-center ">

                                {{-- ! INIZIO ANNUNCIO DA REVISIONARE --}}
                                <div class="col-12 col-md-6 ">

                                    {{-- ! INIZIO CAROSELLO --}}
                                    <div id="carouselExample" class="carousel slide " data-bs-ride="carousel">
                                        <div class="carousel-inner text-center">
                                            @foreach ($announcement_to_check->images as $image)
                                                <div
                                                    class="carousel-item  @if ($loop->first) active @endif">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <img src="{{ $image->getUrl(300, 300) }}"
                                                                class="img-fluid p-3 rounded" alt="">
                                                        </div>
                                                        <div class="col-6">

                                                            <h5 class="tc-accent mt-3 ">Tags</h5>
                                                            <div class="p-2">
                                                                @if ($image->labels)
                                                                    <div>
                                                                        @foreach ($image->labels as $label)
                                                                            <p class="d-inline">{{ $label }},</p>
                                                                        @endforeach
                                                                    </div>
                                                                @endif
                                                                <div class="card-body">
                                                                    <h5 class="tc-accent">Revisione Immagini</h5>
                                                                    <p>Adulti: <span class="{{ $image->adult }}"></span>
                                                                    </p>
                                                                    <p>Satira: <span class="{{ $image->spoof }}"></span>
                                                                    </p>
                                                                    <p>Medicina: <span
                                                                            class="{{ $image->medical }}"></span></p>
                                                                    <p>Violenza: <span
                                                                            class="{{ $image->violence }}"></span></p>
                                                                    <p>Contenuto Ammiccante: <span
                                                                            class="{{ $image->racy }}"></span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExample" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon color-freccia"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden ">Previous</span>
                                        </button>
                                        <button class="carousel-control-next " type="button"
                                            data-bs-target="#carouselExample" data-bs-slide="next">
                                            <span class="carousel-control-next-icon color-freccia"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden ">Next</span>
                                        </button>
                                    </div>
                                    {{-- ? FINE CAROSELLO --}}

                                    {{-- ! INIZIO DATI ANNUNCIO --}}
                                    <div>
                                        <h5 class="card-title text-center mt-3">{{ $announcement_to_check->name }}</h5>
                                        <p class="card-text text-center">{{ $announcement_to_check->description }}</p>
                                        <p class="card-text text-center">€ {{ $announcement_to_check->price }}</p>
                                        <p class=" card-text text-center"><a class="category-a"
                                                href="{{ route('category.show', ['category' => $announcement_to_check->category]) }}">{{ $announcement_to_check->category->name }}
                                            </a></p>
                                        <p class="card-text text-center mt-3">Inserito da:
                                            {{ $announcement_to_check->user->name }}</p>
                                        <p class="card-title text-center my-3">Pubblicato il:
                                            {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                                    </div>
                                    {{-- ? FINE DATI ANNUNCIO --}}

                                </div>
                                {{-- ? FINE ANNUNCIO DA REVISIONARE --}}

                                {{-- ! INIZIO TAGS --}}

                                {{-- ? FINE TAGS --}}

                            </div>
                        </div>


                </div>
            @else
                {{-- ! INIZIO IMMAGINE DI DEFAULT --}}
                <div class="carousel-item active">
                    <img src="public/media/default.png" class="d-block w-100" alt="...">
                </div>
                {{-- ? FINE IMMAGINE DI DEFAULT --}}

    @endif

    </div>
    </div>


    {{-- ! INIZIO BUTTON ACCETTA RIFIUTA ANNULLA --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 text-center">
                <form class="d-inline"
                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                    method="POST">
                    @csrf
                    @method('patch')
                    <button type="submit" class="btn">Accetta</button>
                </form>
                <form class="d-inline"
                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                    method="POST">
                    @csrf
                    @method('patch')
                    <button type="submit" class="btn">Rifiuta</button>
                </form>
            </div>
        @elseif ($abort)
            <div class="col-12 d-flex justify-content-center pb-3">
                <form action="{{ route('revisor.abort_announcement', ['announcement' => $abort]) }}" method="POST">
                    @csrf
                    @method('patch')
                    <button type="submit" class="btn">Annulla</button>
                </form>
            </div>
        </div>
    </div>
    {{-- ? FINE BUTTON ACCETTA RIFIUTA ANNULLA --}}

    @endif


</x-layout>
