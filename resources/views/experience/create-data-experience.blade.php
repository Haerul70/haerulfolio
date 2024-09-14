<!-- Modal -->
<div class="modal fade" id="createDataExperienceModal" tabindex="-1" aria-labelledby="createDataExperienceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('experience.store-data-experience') }}" method="post"
                    class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="service_id" class="form-label">Title</label>
                        <select name="service_id" id="service_id" class="form-select" required>
                            <option value="" disabled selected>Pilih Title</option>
                            @foreach ($dataService as $service)
                                <option value="{{ $service->id }}">{{ $service->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="company" class="form-label">Company</label>
                        <input type="text" name="company" id="company" class="form-control"
                            placeholder="Company Name" required></input>
                    </div>
                    <div>
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                    </div>
                    <div>
                        <label for="end_date" class="form-label">Start Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                    </div>
                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10"
                            placeholder="Description"></textarea>
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
