<li class="nav-item" role="presentation">
    <button class="nav-link {{ isset($active) ? "active": "" }}" id="{{ $name }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $name }}" type="button" role="tab" aria-controls="{{ $name }}" aria-selected="true">{{ __($name) }}</button>
</li>
