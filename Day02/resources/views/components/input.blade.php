<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" 
            name="{{ $name }}"
            class="form-control" 
            placeholder="{{ $placeholder }}" 
            >
    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </span>
</div>