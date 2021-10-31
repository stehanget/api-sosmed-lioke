<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="authLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content animate__animated animate__fadeIn">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <h2 class="text-center border-bottom py-2" style="font-size: 26px">Edit Profile</h2>
                    <div class="gap-2 d-flex flex-column" style="">
                        <label for="edit">Photo Profile <span class="text-danger form-label">*</span></label>
                        <input type="file" accept="image/*" id="edit-photo" class="form-control" placeholder="photo profile" required>
                        <label for="edit-name">Nama <span class="text-danger form-label">*</span></label>
                        <input type="text" id="edit" class="form-control" placeholder="nama" value="{{ $user->name }}" required>
                        <label for="edit-nickname">Nickname <span class="text-danger form-label">*</span></label>
                        <input type="text" id="edit" class="form-control" placeholder="nickname" value="{{ $user->nickname }}" required>
                        <label for="edit-email">Email <span class="text-danger">*</span></label>
                        <input type="email" id="edit" class="form-control" placeholder="email" value="{{ $user->email }}" required>
                        <label for="edit-phone">Phone <span class="text-danger">*</span></label>
                        <input type="number" id="edit" class="form-control" placeholder="phone" value="{{ $user->phone }}" required>
                        <label for="edit-bio">Bio</label>
                        <input type="text" id="edit" class="form-control" placeholder="bio">
                        <label for="edit-interest">interest</label>
                        <input type="text" id="edit" class="form-control" placeholder="interest">
                    </div>
                    <button id="btn-update-profile" class="btn btn-get-started float-end my-3">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
