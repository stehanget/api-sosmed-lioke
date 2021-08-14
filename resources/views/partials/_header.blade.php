<header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="/">GoLioo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        @if (Auth::check())
            <nav id="navbar" class="d-flex dropdown">
                @if (!(Route::currentRouteName() == 'dashboard'))
                    <a class="btn-get-started m-0 me-3 py-2" href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a id="btn-upload-img" class="btn-get-started m-0 me-3 py-2" href="#" data-bs-toggle="modal"
                        data-bs-target="#add-image">Upload</a>
                @endif
                <div class="dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img class="img-profile rounded-circle" src="{{ Auth::user()->photo_profile ? Auth::user()->photo_profile : asset('img/team/team-3.jpg') }}" alt=""
                        style="width: 32px; height:32px;">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form action="{{ route('logout') }}" method="GET">
                        <li><button type="submit" class="dropdown-item btn">Logout</button></li>
                    </form>
                </ul>
            </nav>
        @else
            <nav class="d-flex dropdown logged d-none">
                @if (!(Route::currentRouteName() == 'dashboard'))
                    <a class="btn-get-started m-0 me-3 py-2" href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a id="btn-upload-img" class="btn-get-started m-0 me-3 py-2" href="#" data-bs-toggle="modal"
                        data-bs-target="#add-image">Upload</a>
                @endif
                <div class="dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img class="img-profile rounded-circle" src="{{ asset('img/team/team-3.jpg') }}" alt=""
                        style="width: 32px; height:32px;">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form action="{{ route('logout') }}" method="GET">
                        <li><button type="submit" class="dropdown-item btn">Logout</button></li>
                    </form>
                </ul>
            </nav>
            <nav class="navbar not-logged">
                <ul>
                    <li><a class="getstarted" href="#" data-bs-toggle="modal" data-bs-target="#auth">Sign In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        @endif


    </div>
</header><!-- End Header -->
