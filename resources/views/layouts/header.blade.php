<div class="container-fluid sm:container d-flex justify-content-between align-items-center">

    <h1 class="logo me-auto me-lg-0"><a href="/">
            <img src="/assets/img/site.png" alt=""></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            {{-- <li><a class="active" href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="{{ route('academics') }}">Academics</a></li>
            <li><a href="/faculty">Faculty</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/pvmo">PVMO</a></li>
            <li><a href="/contact">Contact</a></li> --}}
            @if (request()->is('/'))
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Academics</a></li>
                <li><a class="nav-link scrollto" href="#faculty">Faculty</a></li>
                <li><a class="nav-link scrollto" href="#events">News & Events</a></li>
                <li><a class="nav-link scrollto" href="#pvmo">VMO</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <!-- Authentication Links -->
            @endif
            @guest
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('events.dashboard') }}">
                            Dashboard
                        </a>
                        <a class="dropdown-item" href="{{ route('testimonials.index') }}">
                            Testimonials BSIT
                        </a>
                        <a class="dropdown-item" href="{{ route('testimonies.index') }}">
                            Testimonials BSCS
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <div class="header-social-links">
        <a href="https://www.facebook.com/uddsite" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/colegio_de_dagupan/" class="instagram"><i class="bi bi-instagram"></i></a>
    </div>
</div>
