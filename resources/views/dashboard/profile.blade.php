@extends('layouts.dashboard')

@section('title', 'Dashboard - LIOKE')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid position-relative mt-md-3 ms-md-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col text-center text-sm-start d-sm-flex">
                    <img class="img-profile rounded-circle" src="{{ $user->photo_profile ? $user->photo_profile : asset('img/team/team-3.jpg') }}" alt="">
                    <div class="d-flex-column align-self-center ms-sm-4">
                        <h1>{{ $user->name }}</h1>
                        <h2>{{ $user->email }}</h2>
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
                                <li data-filter="shot" class="filter-portofolio filter-active" data-bs-toggle="list" href="#shot" role="tab"
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
                            <div class="tab-pane fade show active" id="shot" role="tabpanel" aria-labelledby="shot-list">
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

    @include('partials.modal._view-dash')

@endsection

@push('custom-js')
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script>
        var portofolioData = {!! json_encode($projects) !!}
        var userData = {!! json_encode($user) !!}
    </script>
    @php
    include 'js/profile.html';
    include 'js/search.html';
    @endphp
@endpush
