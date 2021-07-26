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
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>GooLioooooo</h1>
                    <h2>Membuat kita sulit dalam apapun :)</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#about" class="btn-get-started register-link" data-bs-toggle="modal" data-bs-target="#auth">Sign
                    Up</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h2>Portfolio</h2>
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row row-cols-4 gap-y" data-aos="fade-up" data-aos-delay="300">
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-header p-0">
                                <img src="{{ asset('img/team/team-3.jpg') }}" alt="...">
                            </div>
                            <div class="card-body px-0 py-2">
                                <div class="d-flex gap-2">
                                    <img src="{{ asset('img/team/team-3.jpg') }}" class="rounded-circle" width="24"
                                        height="24">
                                    <span> Wildan </span>
                                    <div class="feedback ms-auto">
                                        <span><i data-feather="eye"></i> <small>17k</small> </span>
                                        <span><i data-feather="heart"></i> <small>17k</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#add-image">ADD IMAGE</button>
                </div>
            </div>
    </main><!-- End #main -->

    @include('partials.modal._add-image')

@endsection

@push('custom-js')
    <!-- partial -->
    <script src="assets/js/upload.js"></script>
@endpush
