<div class="modal fade" id="generate-pdf" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content animate__animated animate__fadeIn">
            <div class="modal-body">
                <label for="profesi" class="form-label">Profesi</label>
                <input type="text" id="profesi" class="form-control mb-3"
                    placeholder="Tulis profesi anda disini">
                <label for="self-desc" class="form-label">Deskripsi Diri</label>
                <textarea id="self-desc" class="form-control mb-3" rows="5"
                    placeholder="Tulis deskripsi diri anda disini"></textarea>
                <label for="work-place" class="form-label">Perusahaan</label>
                <input type="text" id="work-place" class="form-control mb-3"
                    placeholder="Tulis perusahaan anda disini">
                <label for="work-city" class="form-label">Lokasi Perusahaan</label>
                <input type="text" id="work-city" class="form-control mb-3"
                    placeholder="Tulis lokasi perusahaan anda disini">
                <label for="year-start" class="form-label">Tahun Masuk</label>
                <input type="text" id="year-start" class="form-control mb-3"
                    placeholder="Tulis tahun masuk anda disini">
                <label for="year-end" class="form-label">Tahun Keluar</label>
                <input type="text" id="year-end" class="form-control mb-3"
                    placeholder="Tulis tahun keluar anda disini">
                <label for="desc-exp" class="form-label">Deskripsi Pengalaman</label>
                <textarea id="desc-exp" class="form-control mb-3" rows="5"
                    placeholder="Tulis deskripsi pengalaman anda disini"></textarea>
                <label for="hard-skill" class="form-label">Hard Skill</label>
                <input type="text" id="hard-skill" class="form-control mb-3"
                    placeholder="Tulis hard skill anda disini">
                <label for="soft-skill" class="form-label">Soft Skill</label>
                <input type="text" id="soft-skill" class="form-control mb-3"
                    placeholder="Tulis soft skill anda disini">
                <label for="project-name" class="form-label">Nama Project</label>
                <select id="project-name" class="form-select mb-3">
                    <option value="project 1">Project 1</option>
                    <option value="project 2">Project 2</option>
                    <option value="project 3">Project 3</option>
                </select>
                <label for="total-client" class="form-label">Total Client</label>
                <input type="number" id="total-client" class="form-control mb-3"
                    placeholder="Tulis total client anda disini">
                <label for="total-project" class="form-label">Total Project</label>
                <input type="number" id="total-project" class="form-control mb-3"
                    placeholder="Tulis total project anda disini">
                <label for="total-profit" class="form-label">Total Profit</label>
                <input type="number" id="total-profit" class="form-control mb-3"
                    placeholder="Tulis total profit anda disini">
                <div class="form__files-container" id="files-list-container"></div>
                {{-- <button id="btn-submit-img" class="btn btn-get-started btn-submit-img w-100 mt-0" data-bs-dismiss="modal">SUBMIT</button> --}}
                <a href="{{ route('portfolio') }}" class="btn btn-get-started btn-submit-img mt-3 float-end" target="_blank">Submit</a>
            </div>
        </div>
    </div>
</div>
