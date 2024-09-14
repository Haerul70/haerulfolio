<!-- Modal -->
<div class="modal fade" id="deleteDataExperienceModal_{{ $experience->id }}" tabindex="-1"
    aria-labelledby="deleteDataExperienceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apa anda yakin ingin menghapus Data Experience {{ $experience->title }} ?
                </p>
                <div class="mt-5">
                    <a href="{{ route('experience.confirm-delete-data-experience', ['id' => $experience->id]) }}"
                        class="btn btn-danger">Yakin</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
