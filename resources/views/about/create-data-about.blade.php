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
                    <div>
                        <label for="user_id" class="form-label">Nama</label>
                        <select name="user_id" id="user_id" class="form-select" required>
                            <option value="" disabled selected>Pilih Nama Pengguna</option>
                            @foreach ($dataUser as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="bio" class="form-label">Bio</label>
                        <textarea name="bio" id="bio" cols="10" rows="4" class="form-control" required></textarea>
                    </div>
                    <div>
                        <label for="degree" class="form-label">Degree</label>
                        <input type="text" name="degree" id="degree" class="form-control" placeholder="Degree"
                            required>
                    </div>
                    <div>
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control"
                            placeholder="Phone (+62)" required>
                    </div>
                    <div>
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" cols="10" rows="4" class="form-control" placeholder="Address"
                            required></textarea>
                    </div>
                    <div>
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="City"
                            required>
                    </div>
                    <div>
                        <label for="country" class="form-label">Country</label>
                        <input type="text" name="country" id="country" class="form-control" placeholder="Country"
                            required>
                    </div>
                    <div>
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" placeholder="Birthday"
                            required>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="email@example.com" required>
                    </div>
                    <div>
                        <label for="profile_picture" class="form-label">Picture</label>
                        <input type="file" name="profile_picture" id="profile_picture" class="form-control" required>
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
