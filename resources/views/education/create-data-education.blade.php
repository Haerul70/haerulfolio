<!-- Modal -->
<div class="modal fade" id="createDataEducationModal" tabindex="-1" aria-labelledby="createDataEducationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('education.store-data-education') }}" method="post"
                    class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="major" class="form-label">Major</label>
                        <input type="text" name="major" id="major" class="form-control"
                            placeholder="Major Name" required></input>
                    </div>
                    <div>
                        <label for="school_name" class="form-label">School Name</label>
                        <input type="text" name="school_name" id="school_name" class="form-control"
                            placeholder="Major Name" required></input>
                    </div>
                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10"
                            placeholder="Description"></textarea>
                    </div>
                    <div>
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                    </div>
                    <div>
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" required>
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
