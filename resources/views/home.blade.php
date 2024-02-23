<x-layout title="Presto.it">
    
    <div class="container-fluid">
        <div class="row">
            {{-- ! Inizio header --}}
            <header class="vh-100 text-center d-flex flex-column justify-content-center align-items-center">
                <div class="col-12">
                    <h1 class="mt-5 h1-font lobster">Presto.it</h1>
                    <h2 class="text-w">{{__('ui.welcome')}}</h2>
                    {{-- @auth --}}
                    <div class="mt-5">
                        <a class="btn" href="{{route('announcements.create')}}">{{__('ui.startSelling')}}</a>
                    </div>
                </div>
            </header>
        </div>
    </div>  
    {{-- ? fine header --}}
    
    {{-- ! INIZIO CATEGORIE --}}
    <div class="container-fluid background-categorie ">
        <div class="row">
            <div class="d-flex justify-content-center">
                <h2 class="mb-3 mt-3 fs-1">{{__('ui.categories')}}</h2>
            </div>
            <div class="row mt-1 justify-content-evenly">
                @foreach($categories as $category)
                <div class="col-6 col-sm-3 col-md-2 col-lg-1 mt-3 mb-3 d-flex justify-content-center align-items-center flex-column">
                    <i class="fa-solid fs-2 text-w fa-{{__("ui.$category->id")}}"></i>
                    <a class="fw-bolder pallino text-center category-div btn-category fs-6" href="{{route('category.show',compact('category'))}}">{{($category->name)}}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    {{-- ! INIZIO ULTIMI ANNUNCI --}}
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <h2 class="p-3 text-center fs-1">{{__('ui.latestAds')}}</h2>
            @foreach ($announcements as $announcement)
            <x-card :announcement="$announcement"/>
            @endforeach
        </div>
    </div>
</x-layout>