@extends('layouts.dashboard')

@section('title', 'Dashboard - LIOKE')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid position-relative mt-md-3 ms-md-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col text-center text-sm-start d-sm-flex">
                    <img class="img-profile rounded-circle" src="{{ Auth::user()->photo_profile ? Auth::user()->photo_profile : asset('img/team/team-3.jpg') }}" alt="">
                    <div class="d-flex-column align-self-center ms-sm-4">
                        <h1>{{ Auth::user()->name }}</h1>
                        <h2>{{ Auth::user()->email }}</h2>
                        <p><a href="#" class="btn-get-started register-link" data-bs-toggle="modal" data-bs-target="#profile">Edit
                            Profile</a></p>
                    </div>
                    <div class="upload-pos position-absolute">
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

                            <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#generate-pdf">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                              <div class="desc">Generate</div>
                            </a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio pt-0">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <ul id="portfolio-flters" class="m-auto">
                            <div class="list-group flex-row" id="list-tab" role="tablist">
                                <li data-filter="*" class="filter-portofolio filter-active" data-bs-toggle="list" href="#home" role="tab"
                                    aria-controls="home">All <span id="total-project">0</span></li>
                                <li data-filter="shot" class="filter-portofolio" data-bs-toggle="list" href="#shot" role="tab"
                                aria-controls="shot">Shots <span id="total-shot">0</span></li>
                                <li data-filter="like-shot" class="filter-portofolio" data-bs-toggle="list" href="#like-shot" role="tab"
                                aria-controls="like-shot">Like Shots <span id="total-like-shot">0</span></li>
                                <li data-filter="about" data-bs-toggle="list" href="#about" role="tab"
                                    aria-controls="about" class="filter-portofolio">About</li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-list">
                                <div id="row-portofolio" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gap-y"
                                    data-aos="fade-up" data-aos-delay="300">

                                </div>
                            </div>
                            <div class="tab-pane fade show" id="shot" role="tabpanel" aria-labelledby="shot-list">
                                <div id="row-portofolio" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gap-y"
                                    data-aos="fade-up" data-aos-delay="300">

                                </div>
                            </div>
                            <div class="tab-pane fade show" id="like-shot" role="tabpanel" aria-labelledby="like-shot-list">
                                <div id="row-portofolio" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gap-y"
                                    data-aos="fade-up" data-aos-delay="300">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-list">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col d-flex flex-column">
                                            <b>Biography</b>
                                            <p id="tv-biography"></p>
                                            <b>Interest</b>
                                            <p id="tv-interest"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main><!-- End #main -->

    @include('partials.modal._add-image', ['categories' => \App\Models\Category::get()])
    @include('partials.modal._edit-profile', ['user' => Auth::user()])
    @include('partials.modal._view-dash')
    @include('partials.modal._generate-pdf')

@endsection

@push('custom-js')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript">
        $(document).find('.lfm').filemanager('image')
    </script>
    @php
    include 'js/dashboard.html';
    include 'js/search.html';
    include 'js/generate-pdf.html';
    @endphp
@endpush
