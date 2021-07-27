<div class="modal fade" id="add-image" tabindex="-1" aria-labelledby="add-imageLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content animate__animated animate__fadeIn">
            <div class="modal-body">
                <!-- partial:index.partial.html -->
                <form class="form">
                    <label for="project-name" class="form-label">Nama Proyek</label>
                    <input type="text" id="project-name" class="form-control mb-3" placeholder="Tulis nama proyek anda disini">
                    <label for="project-desc" class="form-label">Deskripsi Proyek</label>
                    <textarea name="" id="project-desc" class="form-control mb-3" rows="5" placeholder="Tulis deskripsi proyek anda disini"></textarea>
                    <label class="form__container" id="upload-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-image">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                        <button class="btn btn-outline-secondary border-2">Choose</button>
                        or Drag & Drop Files
                        <input class="form__file" id="upload-files" type="file" accept="image/*" multiple="multiple" />
                    </label>
                    <div class="form__files-container" id="files-list-container"></div>
                    <button class="btn btn-submit-img w-100">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
