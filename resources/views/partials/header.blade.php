<header class="">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark mb-sm-5" style="background-color: rgba(0,0,0,0.7)">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/Sin-título-2sssss.png') }}" width="130px" alt="">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  {{ request()->is('/') ? 'active' : ''}}">
                        <a class="nav-link" href="/">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ request()->is('tiia/about') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                    </li>
                    <li class="nav-item  {{ request()->is('tiia/paginas-web') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('paginas') }}">Paginas Web <span class="badge badge-danger rounded-circle">50% dto</span></a>
                    </li>
                    <li class="nav-item  {{ request()->is('tiia/contactanos') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- Navbar -->
</header>