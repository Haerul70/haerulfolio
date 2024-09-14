<!-- Modal -->
<div class="modal fade" id="editDataPortfolioModal_{{ $portfolio->id }}" tabindex="-1"
    aria-labelledby="editDataPortfolioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('portfolio.update-data-portfolio', ['id' => $portfolio->id]) }}" method="post"
                    class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="service_id" class="form-label">Category</label>
                        <select name="service_id" id="service_id" class="form-select" required>
                            <option value="" disabled selected>Select Categori</option>
                            <option value="{{ $portfolio->service->id }}" selected>{{ $portfolio->service->title }}
                            </option>
                            @if ($dataService && $dataService->count() > 0)
                                @foreach ($dataService as $service)
                                    <option value="{{ $service->id }}"
                                        {{ old('service_id', $portfolio->service_id ?? '') == $service->id ? 'selected' : '' }}>
                                        {{ $service->title }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>No data available</option>
                            @endif
                        </select>
                    </div>
                    <div>
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" value="{{ $portfolio->title }}"
                            class="form-control" placeholder="Title" required>
                    </div>
                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="2"
                            placeholder="Description">{!! $portfolio->description !!}</textarea>
                    </div>
                    <div>
                        <label for="project_url" class="form-label">Project Url</label>
                        <input type="text" name="project_url" id="project_url" value="{{ $portfolio->project_url }}"
                            class="form-control" placeholder="Add project url">
                    </div>
                    <div>
                        <label for="image_url" class="form-label">Picture</label>
                        <input type="file" name="image_url" id="image_url" class="form-control" required>
                        @if ($portfolio->image_url)
                            <img src="{{ asset('storage/' . $portfolio->image_url) }}" alt="Current Foto" width="80px"
                                class="avatar avatar-lg me-3 mt-3">
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
