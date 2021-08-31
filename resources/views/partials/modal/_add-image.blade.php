<div class="modal fade" id="add-image" tabindex="-1" aria-labelledby="add-imageLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content animate__animated animate__fadeIn">
            <div class="modal-body">
                <!-- partial:index.partial.html -->
                <label for="project-name" class="form-label">Nama Proyek</label>
                <input type="text" id="project-name" class="form-control mb-3"
                    placeholder="Tulis nama proyek anda disini">
                <label for="project-desc" class="form-label">Deskripsi Proyek</label>
                <textarea name="" id="project-desc" class="form-control mb-3" rows="5"
                    placeholder="Tulis deskripsi proyek anda disini"></textarea>
                <label for="project-category" class="form-label">Kategori Proyek</label>
                <select name="" id="project-category" class="form-select mb-3">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <div id="holder" style="margin: 15px 0; max-height: 10rem;display: flex; gap: 16px;"></div>
                <div class="input-group mb-3" id="lfm" data-input="upload-files" data-preview="holder" data-fname="file-name">
                    <span class="input-group-btn">
                        <a class="btn btn-get-started m-0" style="border-radius: 5px 0 0 5px;">
                        <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="upload-files" class="form-control" type="hidden" name="filepath">
                    <input id="file-name" class="form-control" type="text" disabled>
                </div>
                <div class="form__files-container" id="files-list-container"></div>
                <button id="btn-submit-img" class="btn btn-get-started btn-submit-img w-100 mt-0" data-bs-dismiss="modal">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
