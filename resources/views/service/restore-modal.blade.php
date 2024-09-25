<!-- Modal -->
<div class="modal fade" id="restoreDataSoftDeleteServiceModal_{{ $service->id }}" tabindex="-1"
    aria-labelledby="restoreDataSoftDeleteServiceModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apa anda yakin ingin merestore Data Service {{ $service->title }} ?
                </p>
                <div class="mt-5">
                    <a href="{{ route('service.restore-data-softdelete-service', ['id' => $service->id]) }}"
                        class="btn btn-success">Yakin</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
