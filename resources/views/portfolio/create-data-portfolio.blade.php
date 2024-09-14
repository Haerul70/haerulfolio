<!-- Modal -->
<div class="modal fade" id="createDataPortfolioModal" tabindex="-1" aria-labelledby="createDataPortfolioModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('portfolio.store-data-portfolio') }}" method="post"
                    class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="service_id" class="form-label">Category</label>
                        <select name="service_id" id="service_id" class="form-select" required>
                            <option value="" disabled selected>Pilih Category</option>
                            @foreach ($dataService as $service)
                                <option value="{{ $service->id }}">{{ $service->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                            required>
                    </div>
                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="4"
                            placeholder="Description"></textarea>
                    </div>
                    <div>
                        <label for="project_url" class="form-label">Project Url</label>
                        <input type="text" name="project_url" id="project_url" class="form-control"
                            placeholder="Add project url">
                    </div>
                    <div>
                        <label for="image_url" class="form-label">Image</label>
                        <input type="file" name="image_url" id="image_url" class="form-control"
                            placeholder="Add Image">
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
