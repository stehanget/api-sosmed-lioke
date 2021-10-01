@extends('layouts.dashboard')

@section('title', 'Home - LIOKE')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Lioke</h1>
                    <h2>Lioke adalah tujuan utama untuk menemukan & memamerkan karya kreatif dan rumah bagi para kreator terbaik dunia</h2>
                </div>
            </div>
            @if (!Auth::check())
                <div class="text-center">
                    <a href="#about" class="btn-get-started register-link" data-bs-toggle="modal"
                        data-bs-target="#auth">Sign
                        Up</a>
                </div>
            @endif
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio pt-0">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h2>Portfolio</h2>
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-portofolio filter-active">All</li>
                            @foreach (\App\Models\Category::all() as $category)
                                <li class="filter-portofolio" data-filter="{{ $category->id }}">{{ $category->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div id="row-portofolio" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gap-y" data-aos="fade-up"
                    data-aos-delay="300">

                </div>
            </div>
    </main><!-- End #main -->

    @include('partials.modal._view')
    @include('partials.modal._add-image', ['categories' => \App\Models\Category::get()])

@endsection

@push('custom-js')
    @php
    include 'js/home.html';
    include 'js/auth.html';
    include 'js/search.html';
    @endphp
@endpush
