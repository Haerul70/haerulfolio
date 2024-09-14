<!-- Modal -->
<div class="modal fade" id="editDataAboutModal_{{ $about->id }}" tabindex="-1" aria-labelledby="editDataAbotModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('about.update-data-about', ['id' => $about->id]) }}" method="post"
                    class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="user_id" class="form-label">Nama User</label>
                        <select name="user_id" id="user_id" class="form-select" required>
                            <option value="" disabled selected>Pilih User</option>
                            <option value="{{ $about->user->id }}" selected>{{ $about->user->name }}
                            </option>
                            @if ($dataUser && $dataUser->count() > 0)
                                @foreach ($dataUser as $user)
                                    <option value="{{ $user->id }}"
                                        {{ old('user_id', $about->user_id ?? '') == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>No data available</option>
                            @endif
                        </select>
                    </div>
                    <div>
                        <label for="bio" class="form-label">Bio</label>
                        <textarea name="bio" id="bio" cols="10" rows="4" class="form-control" required>{{ strip_tags($about->bio) }}</textarea>
                    </div>
                    <div>
                        <label for="degree" class="form-label">Degree</label>
                        <input type="text" name="degree" id="degree" value="{{ $about->degree }}"
                            class="form-control" placeholder="Degree" required>
                    </div>
                    <div>
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ $about->phone }}"
                            class="form-control" placeholder="Phone (+62)" required>
                    </div>
                    <div>
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" cols="10" rows="4" class="form-control" placeholder="Address"
                            required>{{ strip_tags($about->address) }}</textarea>
                    </div>
                    <div>
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" value="{{ $about->city }}"
                            class="form-control" placeholder="City" required>
                    </div>
                    <div>
                        <label for="country" class="form-label">Country</label>
                        <input type="text" name="country" id="country" value="{{ $about->country }}"
                            class="form-control" placeholder="Country" required>
                    </div>
                    <div>
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" name="birthday" id="birthday" value="{{ $about->birthday }}"
                            class="form-control" placeholder="Birthday" required>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ $about->email }}"
                            class="form-control" placeholder="email@example.com" required>
                    </div>
                    <div>
                        <label for="profile_picture" class="form-label">Picture</label>
                        <input type="file" name="profile_picture" id="profile_picture" class="form-control" required>
                        @if ($about->profile_picture)
                            <img src="{{ asset('storage/' . $about->profile_picture) }}" alt="Current Foto"
                                width="80px" class="avatar avatar-lg me-3 mt-3">
                        @else
                            <img src="{{ asset('assets/admin/img/default-img.png') }}" alt="" width="80px"
                                class="avatar avatar-lg me-3 mt-3">
                        @endif
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
