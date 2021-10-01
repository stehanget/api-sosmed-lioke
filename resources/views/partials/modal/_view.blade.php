<div class="modal fade pe-0" id="view" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content animate__animated animate__fadeIn">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-7 feed mb-4 mb-lg-0">

                        <div id="image-feed" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                            <div class="carousel-indicators">
                                {{-- <button type="button" data-bs-target="#image-feed" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#image-feed" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#image-feed" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button> --}}
                            </div>
                            <div class="carousel-inner">
                                {{-- <div class="carousel-item active">
                                    <img src="https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1" alt="">
                                </div> --}}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#image-feed"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#image-feed"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div id="content-feed" class="col-12 col-lg-5 border-md-start d-flex flex-column">
                        <div class="d-flex mb-3">
                            <a href="#" id="current-user-portofolio">
                                <span class="avatar me-2">
                                    <img class="rounded-circle" src="{{ asset('img/team/team-3.jpg') }}" width="24" height="24" style="object-fit: cover;" alt="">
                                </span>
                                <span class="user text-dark">user pembuat</span>
                            </a>
                        </div>
                        <div class="comment">
                            Category : <span class="category">anim</span>
                            <div class="description">
                                <p>description</p>
                            </div>
                            <div class="comment-body">
                                {{-- <div class="row py-3">
                                    <div class="col-auto">
                                        <div class="avatar">
                                            <img class="rounded-circle w-100" src="{{ asset('img/team/team-3.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <span class="name-visitor nav-link d-inline me-1 p-0">Name</span>
                                        <span class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores,
                                            pariatur.</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="input-comment mt-auto">
                            <div class="row mb-2">
                                <div class="col d-flex">
                                    <textarea id="input-comment" class="form-control" name="" rows="1"></textarea>
                                    <button id="btn-store-comment" class="btn btn-get-started m-0 py-2">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
