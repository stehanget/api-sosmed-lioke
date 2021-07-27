@extends('layouts.dashboard')

@section('title', 'Home')

    @push('custom-css')
        <link rel="stylesheet" href="assets/css/upload.css">
    @endpush

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col text-end">
                    <img class="rounded-circle w-25" src="{{ asset('img/team/team-3.jpg') }}" alt="">
                </div>
                <div class="col-xl-7 col-lg-9 text-start">
                    <h1>Username</h1>
                    <h2>Malang, Indonesia</h2>
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
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <ul id="portfolio-flters" class="me-auto">
                            <div class="list-group flex-row" id="list-tab" role="tablist">
                                <li data-filter="*" class="filter-active" data-bs-toggle="list" href="#home" role="tab"
                                    aria-controls="home">All</li>
                                <li data-filter=".filter-app">shots</li>
                                <li data-filter=".filter-card">Boosted Shots</li>
                                <li data-filter=".filter-web">Collections</li>
                                <li data-filter=".filter-web">Liked Shots</li>
                                <li data-filter=".filter-web" data-bs-toggle="list" href="#about" role="tab"
                                    aria-controls="about">About</li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-list">
                                <div id="row-portofolio" class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gap-y"
                                    data-aos="fade-up" data-aos-delay="300">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-list">
                                <div class="row">
                                    <div class="col d-flex flex-column">
                                        <b>Biography</b>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#profile" class="mb-3">Add
                                            Bio</a>
                                        <b>skill</b>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#profile">Add Skills</a>
                                    </div>
                                    <div class="col">
                                        <b>Lokasi</b>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-map-pin">
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                            Malang, Indonesia
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main><!-- End #main -->

    @include('partials.modal._add-image')
    @include('partials.modal._edit-profile')

@endsection

@push('custom-js')
    <script src="assets/js/upload.js"></script>
    @php
    include 'js/dashboard.html';
    @endphp
@endpush
