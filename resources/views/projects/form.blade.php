<div class="mb-3">
    <label class="form-label">Title *</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $project->title ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $project->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Project URL</label>
    <input type="url" name="project_url" class="form-control" value="{{ old('project_url', $project->project_url ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Image {{ isset($project) ? '(upload to change)' : '*' }}</label>
    <input type="file" name="image" class="form-control" {{ isset($project) ? '' : 'required' }}>
    @if(isset($project) && $project->image)
        <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="mt-2" width="120">
    @endif
</div>

<div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-control">
        <option value="draft" {{ old('status', $project->status ?? '') == 'draft' ? 'selected' : '' }}>Draft</option>
        <option value="published" {{ old('status', $project->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
    </select>
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($project) ? 'Update' : 'Create' }}
</button>
<a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>

