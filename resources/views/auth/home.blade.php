@extends('layouts.dashboard')

@section('title', 'Home')

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
            <div class="container-fluid" data-aos="fade-up">
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h2>Portfolio</h2>
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter="1">Animation</li>
                            <li data-filter="2">Branding</li>
                            <li data-filter="3">Illustration</li>
                            <li data-filter="4">mobile</li>
                            <li data-filter="5">Print</li>
                            <li data-filter="6">Product Design</li>
                            <li data-filter="7">Typography</li>
                            <li data-filter="8">Web Design</li>
                        </ul>
                    </div>
                </div>

                <div id="row-portofolio" class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gap-y" data-aos="fade-up"
                    data-aos-delay="300">

                </div>
            </div>
    </main><!-- End #main -->

    @include('partials.modal._view')

@endsection

@push('custom-js')
    @php
    include 'js/home.html';
    include 'js/auth.html';
    @endphp
@endpush
