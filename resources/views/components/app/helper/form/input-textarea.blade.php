<div class="form-group mb-2">
    <label class="col-form-label">
        {{__($label ?? $model)}}
    </label>
    <textarea
        @if(!isset($optional))
            required
        @endif
        type="{{ $type ?? "text" }}" class="form-control rounded"
        wire:model="form.{{$model}}"
    ></textarea>
    @error($model)
    <small class="text-danger-emphasis">{{ $message }}</small>
    @enderror
</div>
