<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#"><b>Rawat Pasien</b></a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarScroll">
                                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('positions.index')}}">Positions</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('departements.index')}}">Departements</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('users.index')}}">User</a>
                                                </li>
                                                @if(Auth()->user()->position =="0")
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Link
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <nav id="menu_vertikal">
                                                            <ul>
                                                                <!-- <li><a href="#home">Home</a></li>
                                                                <li><a href="#portfolia">Portfolio</a></li>
                                                                <li><a href="#contact">Contact</a></li> -->
                                                                <a class="btn btn-danger" href="{{ route('login') }}">Logout</a>
                                                            </ul>
                                                        </nav>
                                                    </ul>
                                                </li>
                                                @endif
                                                <li class="nav-item">
                                                    <a class="nav-link disabled">Link</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex" role="search">
                                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-success" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
</header>