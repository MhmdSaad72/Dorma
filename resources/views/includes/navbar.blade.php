<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('home-page.index' )}}"><span><img src="{{ isset($navbar->logo) ? asset('storage/' . $navbar->logo) : 'img/core-img/logo.png'}}" alt="logo"></span> {{ $navbar->logo_name ?? '' }}</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">{{ $navbar->home ?? ''}}</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('home-page.index_1') }}">{{ $navbar->home_style_1 ?? '' }}</a>
                        <a class="dropdown-item" href="{{ route('home-page.index_2') }}">{{ $navbar->home_style_2 ?? ''}}</a>
                        <a class="dropdown-item" href="{{ route('home-page.index_3') }}">{{ $navbar->home_style_3 ?? '' }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-us-page') }}">{{ $navbar->about_us ?? '' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services-page') }}">{{ $navbar->services ?? '' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq-page') }}">{{ $navbar->faq ?? '' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pricing-page') }}">{{ $navbar->pricing ?? '' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-us-page') }}">{{ $navbar->contact ?? '' }}</a>
                </li>
                {{-- <li class="lh-55px mr-3"><a href="#test-popup" class="open-popup-link btn login-btn mr-im">Log in</a></li>
                <li class="lh-55px"><a href="#signup-popup" class="open-signup-link btn login-btn login-last">Signup </a></li> --}}
            </ul>
        </div>
    </div>
</nav>
