<div class="form-group mb-2">
    <label class="col-form-label">
        {{__($label ?? $model)}}
    </label>
    <input
        @if(!isset($optional))
            required
        @endif
        @if(isset($autocomplete))
            autocomplete="{{$autocomplete}}"
        @endif
        type="{{ $type ?? "text" }}" class="form-control rounded"
        wire:model="form.{{$model}}"
        name="{{$model}}"
    >
    @error($model)
    <small class="text-danger-emphasis">{{ $message }}</small>
    @enderror
</div>
