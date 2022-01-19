<header id="site_header">
    <div class="blue">
        <span>DC POWER VISA</span>
        <span>ADDITIONAL DC SITES</span>
    </div>
    <div class="d-flex justify-content-center align-items-center">

        @include('Factors.logo')
        <nav class="nav mx-5">
            <a class="nav-link" href="{{ route('welcome') }}">Home</a>
            <a class="nav-link" href="{{ route('comics') }}">COMICS</a>
            <a class="nav-link "  href="{{route('comics.create')}}">New Comic</a> 
        </nav>
        <div class="input">
            <span>
                SEARCH <i class="fas fa-search"></i>
            </span>
        </div>
    </div>

</header>