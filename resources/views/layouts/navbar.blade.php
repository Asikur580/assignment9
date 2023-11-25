    <!-- navbar -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark border-bottom">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand" href="{{ route('home') }}"><img height="50px" src="{{ asset('img/logo.png') }}" alt=""></a>
            <!-- toggle btn -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- sidebar -->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!-- sidebar header -->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img height="50px" src="{{ asset('img/logo.png') }}" alt=""></h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- sidebar body -->
                <div class="offcanvas-body d-flex flex-column flex-lg-row">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3 fs-5 text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('aboutme') }}">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('service') }}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('skill') }}">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>

                    <div class="d-flex flex-lg-row justify-content-center align-items-center gap-4">
                        <a class="text-white text-decoration-none fs-2" href="https://github.com/Asikur580"><i class="bi bi-github"></i></a>
                        <a class="text-white text-decoration-none fs-3" href="https://www.linkedin.com/in/asikur-rahman-07051b298/"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <!-- navbar end -->