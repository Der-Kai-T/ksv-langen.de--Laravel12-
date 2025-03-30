<div>
    <div class="form-group mb-2">
        <label class="col-form-label">
            {{__($label ?? $model)}}
        </label>
        <select
            @if(!isset($optional))
                required
            @endif
            type="{{ $type ?? "text" }}" class="form-control rounded"
            wire:model="form.{{$model}}"
        >
            <x-app.admin.form.option.placeholder />
            {{ $slot }}
        </select>
        @error($model)
        <small class="text-danger-emphasis">{{ $message }}</small>
        @enderror
    </div>

</div>
