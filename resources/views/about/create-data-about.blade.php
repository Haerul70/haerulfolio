<!-- Modal -->
<div class="modal fade" id="createDataAboutModal" tabindex="-1" aria-labelledby="createDataAbotModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('about.store-data-about') }}" method="post" class="row g-3 needs-validation"
                    novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="row my-3">
                        <div class="col-md-4">
                            <label for="user_id" class="form-label">Nama</label>
                        </div>
                        <div class="col-md-8">
                            <select name="user_id" id="user_id" class="form-select" required="required"
                                data-validation-required-message="Silakan pilih terlebih dahulu!">
                                <option value="" disabled selected>Pilih Nama Pengguna</option>
                                @foreach ($dataUser as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="bio" class="form-label">Bio</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="bio" id="bio" cols="10" rows="4" class="form-control"
                                placeholder="Address"required="required" data-validation-required-message="Silakan masukkan bio anda!"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="degree" class="form-label">Degree</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="degree" id="degree" class="form-control"
                                placeholder="Degree" required="required"
                                data-validation-required-message="Silakan masukkan gelar anda!">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Phone</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="phone" id="phone" class="form-control"
                                placeholder="Phone (+62)" required="required"
                                data-validation-required-message="Silakan masukkan no hp anda!">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="address" class="form-label">Address</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="address" id="address" cols="10" rows="4" class="form-control" placeholder="Address"
                                required="required" data-validation-required-message="Silakan masukkan alamat anda!"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="city" class="form-label">City</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="city" id="city" class="form-control" placeholder="City"
                                required="required" data-validation-required-message="Silakan masukkan nama kota anda!">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="country" class="form-label">Country</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="country" id="country" class="form-control"
                                placeholder="Country" required="required"
                                data-validation-required-message="Silakan masukkan nama negara anda!">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="birthday" class="form-label">Birthday</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" name="birthday" id="birthday" class="form-control"
                                placeholder="Birthday" required="required"
                                data-validation-required-message="Silakan masukkan tanggal lahir anda!">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="email@example.com" required="required"
                                data-validation-required-message="Silakan masukkan email anda!">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="profile_picture" class="form-label">Picture</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="profile_picture" id="profile_picture" class="form-control"
                                required="required" data-validation-required-message="Silakan tambahkan gambar anda!">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
