<footer class="pb-5 bg-gl mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3 d-flex justify-content-center align-items-center flex-column mt-2">
                <a class=" navbar-brand logo-font-footer" href="{{ route('home') }}"><img class="logo" src="/media/logo 2.png" alt=""></a>
                <p class="pb-3"><small> © Tutti i diritti sono riservati</small></p>
            </div>
            <div class="col-12 col-md-3 ">
                <h4 class="text-w my-3">Supporto</h4>
                <ul class="ul-footer position-relative nav flex-column">
                    <li class="li-link nav-item">
                        <a class="text-w link-footer " href="">Domande Frequenti</a>
                    </li>
                    <li class="li-link nav-item pt-2">
                        <a class="text-w link-footer " href="">Consigli</a>
                    </li>
                    <li class="li-link nav-item pt-2">
                        <a class="text-w link-footer " href="">Servizio Clienti</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3 ">
                <h4 class="text-w my-3">Info</h4>
                <ul class="ul-footer position-relative nav flex-column">
                    <li class="li-link nav-item">
                        <a class="text-w link-footer " href="">Contattaci</a>
                    </li>
                    {{-- @auth --}}
                    <li class="li-link nav-item mt-2">
                        <a class="text-w link-footer " href="{{route('form.lavoraconnoi')}}">Lavora con noi</a>
                    </li>
                    <li class="li-link nav-item mt-2">
                        <a class="text-w link-footer ">Come funziona</a>
                    </li>
                    {{-- <li class="li-link nav-item my-1">
                        <a class="text-w link-footer " href="">About Us</a>
                    </li> --}}
                </ul>
            </div>
            <div class="col-12 col-md-3 ">
                <h4 class="text-w my-3">Spedizioni</h4>
                <ul class="ul-footer position-relative nav flex-column">
                    <li class="li-link nav-item">
                        <a class="text-w link-footer " href="">Cambi</a>
                    </li>
                    <li class="li-link nav-item mt-2">
                        <a class="text-w link-footer " href="">Resi</a>
                    </li>
                    <li class="li-link nav-item mt-2">
                        <a class="text-w link-footer " href="">Traccia il tuo ordine</a>
                    </li>
                </ul>
            </div>
            <div class="w-100 d-flex justify-content-center">
                <hr class="text-b w-75">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class=" col-12 text-center ">
                <i class="fa-brands fa-instagram fa-2x text-w px-4"></i>
                <i class="fa-brands fa-facebook fa-2x text-w px-4"></i>
                <i class="fa-brands fa-whatsapp fa-2x text-w px-4"></i>
            </div>
        </div>
    </div>
</footer>
