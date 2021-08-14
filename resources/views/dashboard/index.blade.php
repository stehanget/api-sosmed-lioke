@extends('layouts.dashboard')

@section('title', 'Home')

    @push('custom-css')
        <link rel="stylesheet" href="assets/css/upload.css">
    @endpush

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col text-end">
                    <img class="img-profile rounded-circle h-100 w-25" src="{{ Auth::user()->photo_profile ? Auth::user()->photo_profile : asset('img/team/team-3.jpg') }}" alt="">
                </div>
                <div class="col text-start">
                    <h1>{{ Auth::user()->name }}</h1>
                    <h2>{{ Auth::user()->email }}</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn-get-started register-link" data-bs-toggle="modal" data-bs-target="#profile">Edit
                    Profile</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <ul id="portfolio-flters" class="me-auto">
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

@endsection

@push('custom-js')
    <script src="assets/js/upload.js"></script>
    @php
    include 'js/dashboard.html';
    @endphp
@endpush
