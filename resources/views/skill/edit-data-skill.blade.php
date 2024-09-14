<!-- Modal -->
<div class="modal fade" id="editDataSkillModal_{{ $skill->id }}" tabindex="-1" aria-labelledby="editDataSkillModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('skill.update-data-skill', ['id' => $skill->id]) }}" method="post"
                    class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="skills_type_id" class="form-label">Skill Type</label>
                        <select name="skills_type_id" id="skills_type_id" class="form-select" required>
                            <option value="" disabled selected>Pilih Tipe Skill</option>
                            <option value="{{ $skill->skills_type->id }}" selected>{{ $skill->skills_type->type }}
                            </option>
                            @if ($dataSkillsType && $dataSkillsType->count() > 0)
                                @foreach ($dataSkillsType as $skills_type)
                                    <option value="{{ $skills_type->id }}"
                                        {{ old('skills_type_id', $skill->skills_type_id ?? '') == $skills_type->id ? 'selected' : '' }}>
                                        {{ $skills_type->type }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>No data available</option>
                            @endif
                        </select>
                    </div>
                    <div>
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" value="{{ $skill->title }}"
                            class="form-control" required>
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
