<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="">GoLioo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        @if (Auth::check())
            <nav id="navbar" class="d-flex dropdown">
                <div class="dropdown-toggle me-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img class="rounded-circle" src="{{ asset('img/team/team-3.jpg') }}" alt=""
                        style="width: 32px; height:32px;">
                </div>
                <a class="btn-get-started m-0 py-2" href="#" data-bs-toggle="modal"
                    data-bs-target="#add-image">Upload</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/dashboard">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </nav>
        @else
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="#">Help</a></li>
                    <li><a class="getstarted" href="#" data-bs-toggle="modal" data-bs-target="#auth">Sign In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        @endif


    </div>
</header><!-- End Header -->
