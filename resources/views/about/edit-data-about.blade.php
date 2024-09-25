<!-- Modal -->
<div class="modal fade" id="editDataAboutModal_{{ $item->id }}" tabindex="-1" aria-labelledby="editDataAbotModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('about.update-data-about', ['id' => $item->id]) }}" method="post"
                    class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <!-- User Select -->
                    <div class="row my-3">
                        <div class="col-md-4">
                            <label for="user_id" class="form-label">Nama User</label>
                        </div>
                        <div class="col-md-8">
                            <select name="user_id" id="user_id" class="form-select" required>
                                <option value="" disabled selected>Pilih User</option>
                                @if ($item->user)
                                    <option value="{{ $item->user->id }}" selected>{{ $item->user->name }}</option>
                                @endif
                                @if ($dataUser && $dataUser->count() > 0)
                                    @foreach ($dataUser as $user)
                                        <option value="{{ $user->id }}"
                                            {{ old('user_id', $item->user_id ?? '') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="" disabled>No data available</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <!-- Bio -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="bio" class="form-label">Bio</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="bio" id="bio" class="form-control" cols="10" rows="4" required>{{ strip_tags($item->bio) }}</textarea>
                        </div>
                    </div>

                    <!-- Degree -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="degree" class="form-label">Degree</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="degree" id="degree" value="{{ $item->degree }}"
                                class="form-control" placeholder="Degree" required>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Phone</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="phone" id="phone" value="{{ $item->phone }}"
                                class="form-control" placeholder="Phone (+62)" required>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="address" class="form-label">Address</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="address" id="address" cols="10" rows="4" class="form-control" placeholder="Address"
                                required>{{ strip_tags($item->address) }}</textarea>
                        </div>
                    </div>

                    <!-- City -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="city" class="form-label">City</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="city" id="city" value="{{ $item->city }}"
                                class="form-control" placeholder="City" required>
                        </div>
                    </div>

                    <!-- Country -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="country" class="form-label">Country</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="country" id="country" value="{{ $item->country }}"
                                class="form-control" placeholder="Country" required>
                        </div>
                    </div>

                    <!-- Birthday -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="birthday" class="form-label">Birthday</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" name="birthday" id="birthday" value="{{ $item->birthday }}"
                                class="form-control" placeholder="Birthday" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="email" id="email" value="{{ $item->email }}"
                                class="form-control" placeholder="email@example.com" required>
                        </div>
                    </div>

                    <!-- Profile Picture -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="profile_picture" class="form-label">Picture</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="profile_picture" id="profile_picture" class="form-control">
                            @if ($item->profile_picture)
                                <img src="{{ asset('storage/' . $item->profile_picture) }}" alt="Current Foto"
                                    width="80px" class="avatar avatar-lg me-3 mt-3">
                            @else
                                <img src="{{ asset('assets/admin/img/default-img.png') }}" alt=""
                                    width="80px" class="avatar avatar-lg me-3 mt-3">
                            @endif
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
