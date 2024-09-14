<!-- Modal -->
<div class="modal fade" id="editDataExperienceModal_{{ $experience->id }}" tabindex="-1"
    aria-labelledby="editDataExperienceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('experience.update-data-experience', ['id' => $experience->id]) }}"
                    method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="service_id" class="form-label">Service</label>
                        <select name="service_id" id="service_id" class="form-select" required>
                            <option value="" disabled selected>Pilih Service</option>
                            <option value="{{ $experience->service->id }}" selected>{{ $experience->service->title }}
                            </option>
                            @if ($dataService && $dataService->count() > 0)
                                @foreach ($dataService as $service)
                                    <option value="{{ $service->id }}"
                                        {{ old('service_id', $experience->service_id ?? '') == $service->id ? 'selected' : '' }}>
                                        {{ $service->title }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>No data available</option>
                            @endif
                        </select>
                    </div>
                    <div>
                        <label for="company" class="form-label">Company</label>
                        <input type="text" name="company" id="company" value="{{ $experience->company }}"
                            class="form-control" required></input>
                    </div>
                    <div>
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" name="start_date" id="start_date" value="{{ $experience->start_date }}"
                            class="form-control" required>
                    </div>
                    <div>
                        <label for="end_date" class="form-label">Start Date</label>
                        <input type="date" name="end_date" id="end_date" value="{{ $experience->end_date }}"
                            class="form-control" required>
                    </div>
                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="4"
                            placeholder="Description">{{ $experience->description }}</textarea>
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
