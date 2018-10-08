<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: rgba(0,0,0,0.7)">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
                <strong>TIIA</strong>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="/">INICIO
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">SOBRE TIIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">CONTACTANOS</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- Navbar -->
</header>