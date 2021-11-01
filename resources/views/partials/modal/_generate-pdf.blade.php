<div class="modal fade" id="generate-pdf" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content animate__animated animate__fadeIn">
            <div class="modal-body">
                <form action="{{ route('portfolio') }}" method="post">
                    @csrf

                    <div class="page">
                        <h3 class="m-0 mb-3 fw-bold">Introduction</h3>
                        <h5 class="" style="text-align: end; color: #9A9483; font-size: 16px">Step 1 / 7</h5>
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="form-control mb-3"
                            placeholder="Tulis nama lengkap anda disini">
                        <label for="profesi" class="form-label">Profesi</label>
                        <input type="text" id="profesi" name="profesi" class="form-control mb-3"
                            placeholder="Tulis profesi anda disini">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" id="instagram" name="instagram" class="form-control mb-3"
                            placeholder="Tulis instagram anda disini">
                        <label for="self-desc" class="form-label">Deskripsi Diri</label>
                        <textarea id="self-desc" name="self-desc" class="form-control mb-3" rows="5"
                            placeholder="Tulis deskripsi diri anda disini" maxlength="255"></textarea>
                    </div>
                    <div class="page" style="display:none;">
                        <h3 class="m-0 mb-3 fw-bold">Key Competencies</h3>
                        <h5 class="" style="text-align: end; color: #9A9483; font-size: 16px">Step 2 / 7</h5>
                        <label for="work-place" class="form-label">Perusahaan</label>
                        <input type="text" id="work-place" name="work-place[1]" class="form-control mb-3"
                            placeholder="Tulis perusahaan anda disini">
                        <label for="work-city" class="form-label">Lokasi Perusahaan</label>
                        <input type="text" id="work-city" name="work-city[1]" class="form-control mb-3"
                            placeholder="Tulis lokasi perusahaan anda disini">
                        <div class="row">
                            <div class="col-6">
                                <label for="year-start" class="form-label">Tahun Masuk</label>
                                <input type="text" id="year-start" name="year-start[1]" class="form-control mb-3"
                                    placeholder="Tulis tahun masuk anda disini">
                            </div>
                            <div class="col-6">
                                <label for="year-end" class="form-label">Tahun Keluar</label>
                                <input type="text" id="year-end" name="year-end[1]" class="form-control mb-3"
                                    placeholder="Tulis tahun keluar anda disini">
                            </div>
                        </div>
                        <label for="desc-exp" class="form-label">Deskripsi Pengalaman</label>
                        <textarea id="desc-exp" name="desc-exp[1]" class="form-control mb-3" rows="5"
                            placeholder="Tulis deskripsi pengalaman anda disini"></textarea>
                    </div>
                    <div class="page" style="display:none;">
                        <h3 class="m-0 mb-3 fw-bold">Soft Skills and Hard Skills</h3>
                        <h5 class="" style="text-align: end; color: #9A9483; font-size: 16px">Step 3 / 7</h5>
                        <label for="hard-skill" class="form-label">Hard Skill</label>
                        <input type="text" id="hard-skill" name="hard-skill[1]" class="form-control mb-3"
                            placeholder="Tulis hard skill anda disini">
                        <input type="text" id="hard-skill-2" name="hard-skill[2]" class="form-control mb-3"
                            placeholder="Tulis hard skill anda disini (opsional)">
                        <label for="soft-skill" class="form-label">Soft Skill</label>
                        <input type="text" id="soft-skill" name="soft-skill[1]" class="form-control mb-3"
                            placeholder="Tulis soft skill anda disini">
                        <input type="text" id="soft-skill-2" name="soft-skill[2]" class="form-control mb-3"
                            placeholder="Tulis soft skill anda disini (opsional)">
                        <input type="text" id="soft-skill-3" name="soft-skill[3]" class="form-control mb-3"
                            placeholder="Tulis soft skill anda disini (opsional)">
                    </div>
                    <div class="page" style="display:none;">
                        <h3 class="m-0 mb-3 fw-bold">Team Work</h3>
                        <h5 class="" style="text-align: end; color: #9A9483; font-size: 16px">Step 4 / 7</h5>
                        <label for="reason" class="form-label">Reason</label>
                        <input type="text" id="reason" name="reason[1]" class="form-control mb-3"
                            placeholder="Tulis alasan anda disini">
                        <input type="text" id="reason" name="reason[2]" class="form-control mb-3"
                            placeholder="Tulis alasan anda disini (opsional)">
                        <input type="text" id="reason" name="reason[3]" class="form-control mb-3"
                            placeholder="Tulis alasan anda disini (opsional)">
                        <input type="text" id="reason" name="reason[4]" class="form-control mb-3"
                            placeholder="Tulis alasan anda disini (opsional)">
                        <input type="text" id="reason" name="reason[5]" class="form-control mb-3"
                            placeholder="Tulis alasan anda disini (opsional)">
                    </div>
                    <div class="page" style="display:none;">
                        <h3 class="m-0 mb-3 fw-bold">My Project</h3>
                        <h5 class="" style="text-align: end; color: #9A9483; font-size: 16px">Step 5 / 7</h5>
                        <label for="project-name" class="form-label">Nama Project</label>
                        <input type="text" id="project-name" name="project-name[1]" class="form-control mb-3"
                            placeholder="Tulis nama project anda disini">
                        <label for="desc-project" class="form-label">Deskripsi Project</label>
                        <textarea id="desc-project" name="desc-project[1]" class="form-control mb-3" rows="5"
                            placeholder="Tulis deskripsi project anda disini"></textarea>
                        <div id="holder-project-1" style="margin: 15px 0; max-height: 10rem;display: flex; gap: 16px;"></div>
                        <div class="lfm input-group mb-3" id="lfm" data-input="upload-project-1" data-preview="holder-project-1" data-fname="file-project-name-1">
                            <span class="input-group-btn">
                                <a class="btn btn-get-started m-0" style="border-radius: 5px 0 0 5px;">
                                <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="upload-project-1" class="form-control" type="hidden" name="filepath[1]">
                            <input id="file-project-name-1" class="form-control" type="text" disabled>
                        </div>
                    </div>
                    <div class="page" style="display:none;">
                        <h3 class="m-0 mb-3 fw-bold">Testimoni</h3>
                        <h5 class="" style="text-align: end; color: #9A9483; font-size: 16px">Step 6 / 7</h5>
                        <label for="total-client" class="form-label">Total Client</label>
                        <input type="number" id="total-client" name="total-client" class="form-control mb-3"
                            placeholder="Tulis total client anda disini">
                        <label for="total-project" class="form-label">Total Project</label>
                        <input type="number" id="total-project" name="total-project" class="form-control mb-3"
                            placeholder="Tulis total project anda disini">
                        <label for="total-profit" class="form-label">Total Profit</label>
                        <input type="number" id="total-profit" name="total-profit" class="form-control mb-3"
                            placeholder="Tulis total profit anda disini">
                    </div>
                    <div class="page" style="display:none;">
                        <label for="testimoni-name" class="form-label">Nama Lengkap Testimoni</label>
                        <h5 class="" style="text-align: end; color: #9A9483; font-size: 16px">Step 7 / 7</h5>
                        <input type="text" id="testimoni-name" name="testimoni-name" class="form-control mb-3"
                            placeholder="Tulis nama lengkap testimoni anda disini">
                        <label for="testimoni-desc" class="form-label">Deskripsi Testimoni</label>
                        <textarea id="testimoni-desc" name="testimoni-desc" class="form-control mb-3" rows="5"
                            placeholder="Tulis deskripsi testimoni anda disini"></textarea>
                    </div>
                    <div class="page-footer d-flex">
                        <button type="button" id="btn-previous" class="btn btn-get-started me-3 mt-3" style="width:120px;"><i class="fas fa-arrow-left"></i></button>
                        <button type="button" id="btn-add-more-project" class="btn btn-get-started mt-3" style="width:auto;">Add more project</button>
                        <button type="button" id="btn-add-more-exp" class="btn btn-get-started mt-3" style="width:auto;">Add more experience</button>
                        <button type="button" id="btn-next" class="btn btn-get-started mt-3 ms-auto" style="width:100px; height:"><i class="fas fa-arrow-right"></i></button>
                        <button type="submit" id="btn-submit" class="btn btn-get-started mt-3 ms-auto" style="width:120px;display:none;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
