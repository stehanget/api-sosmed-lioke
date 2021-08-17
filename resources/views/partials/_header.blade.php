<header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="/">Lioke</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        @if (Auth::check())
            <nav id="navbar" class="d-flex dropdown">
                @if (!(Route::currentRouteName() == 'dashboard'))
                    <a class="btn-get-started m-0 me-3 py-2" href="{{ route('dashboard') }}">Dashboard</a>
                {{-- @else --}}
                    {{-- <div class="upload-pos position-absolute">
                        <a id="shortcut-btn" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                          </a>
                      
                          <div id="shortcut-list" data-anim-done="true">
                            <a id="btn-upload-img" class="text-white" href="#" data-bs-toggle="modal" data-bs-target="#add-image">
                                <svg c lass="upload-ico rounded-circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                <div class="desc">Upload</div>
                            </a>

                            <a href="#" onClick="MyWindow=window.open('{{ asset('/filemanager?type=image') }}','MyWindow','width=800,height=600'); return false;" target="_top" class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                <div class="desc">File Manager</div>
                            </a>

                            <a href="#" class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                              <div class="desc">Generate</div>
                            </a>
                          </div>
                    </div> --}}
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
