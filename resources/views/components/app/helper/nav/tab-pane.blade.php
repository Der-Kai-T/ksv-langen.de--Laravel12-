<div class="tab-pane {{ isset($active) ? "active": "" }}" id="{{ $name }}" role="tabpanel" aria-labelledby="{{ $name }}-tab" tabindex="0">
    {{ $slot }}
</div>
