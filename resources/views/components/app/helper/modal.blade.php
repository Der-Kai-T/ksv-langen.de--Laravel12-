<div>
    <div wire:ignore.self class="modal fade" id="{{ $name }}" tabindex="-1" role="dialog"
         aria-labelledby="{{ $name }}Title"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="{{ $name }}Title">
                            {{ $headline }}
                        </h5>

                    </div>
                    <div class="modal-body">

                        {{ $slot }}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  aria-label="Close">
                            <span class="fas fa-times"></span>
                            {{ __("close") }}
                        </button>
                        <button type="button" class="btn btn-{{ $submitClass ?? "primary" }}" wire:click="{{ $submitFunction ?? "submit" }}()" data-bs-dismiss="modal">
                            <span class="fas fa-save"></span>
                            {{ __($submit ?? "save") }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
