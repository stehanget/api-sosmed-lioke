<div class="modal fade" id="view" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content animate__animated animate__fadeIn">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-7 feed mb-4 mb-md-0">

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
                    <div id="content-feed" class="col-12 col-md-5 border-md-start d-flex flex-column">
                        <div class="d-flex mb-3">
                            <span class="avatar me-2">
                                <img class="rounded-circle w-100" src="{{ asset('img/team/team-3.jpg') }}" alt="">
                            </span>
                            <span class="user">user pembuat</span>
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
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="col-auto p-0">
                        <button id="btn-delete-project" class="d-flex btn btn-danger mt-1 justify-content-center p-2" data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                    </div>
                    <div class="col-auto p-0">
                        <button id="btn-edit-project" class="d-flex btn btn-dark mt-1 justify-content-center p-2 ms-2" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#add-image"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
