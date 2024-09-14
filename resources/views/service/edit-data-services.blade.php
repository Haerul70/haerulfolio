<!-- Modal -->
<div class="modal fade" id="editDataServiceModal_{{ $service->id }}" tabindex="-1"
    aria-labelledby="editDataServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('service.update-data-services', ['id' => $service->id]) }}" method="post"
                    class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" value="{{ $service->title }}"
                            class="form-control" placeholder="Title" required>
                    </div>
                    <div>
                        <label for="description" class="form-label"></label>
                        <textarea name="description" id="description" cols="10" rows="4" class="form-control" required>{!! $service->description !!}</textarea>
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
