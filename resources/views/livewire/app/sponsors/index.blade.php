<div>
    <div class="row">
        <div class="col-6">
            <h3>Sponsors</h3>
        </div>
        <div class="col-6 float-end">
            <button class="btn btn-primary float-end"
                    data-bs-target="#newSponsorModal"
                    data-bs-toggle="modal"
                    wire:click="clear()"
            >
                <span class="fas fa-plus-circle mr-2"></span>
                neuen Sponsor anlegen
            </button>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Sponsor</th>
            <th>URL</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($sponsors as $sponsor)
            <tr>
                <td>{{ $sponsor->name }}</td>
                <td>{{ $sponsor->url }}</td>
                <td>
                    <button class="btn btn-sm btn-primary"
                             wire:click="load('{{ $sponsor->id }}')"
                             data-bs-target="#SponsorImageModal"
                             data-bs-toggle="modal"
                    >
                        <span class="fas fa-upload"></span>
                    </button>

                    <button class="btn btn-sm btn-primary"
                            wire:click="load('{{ $sponsor->id }}')"
                            data-bs-target="#editSponsorModal"
                            data-bs-toggle="modal"
                    >
                        <span class="fas fa-edit"></span>
                    </button>
                    <button class="btn btn-sm btn-danger"
                            wire:click="load('{{ $sponsor->id }}')"
                            data-bs-target="#deleteModal"
                            data-bs-toggle="modal"
                    >
                        <span class="fas fa-trash"></span>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <x-app.helper.modal
        name="SponsorImageModal"
        headline="Sponsor-Logo hochladen"
        submit-function="storeImage"
    >
        <x-app.helper.form.input-text model="image" type="file"/>
        Dateiformat: png mit transparentem Hintergrund

    </x-app.helper.modal>


    <x-app.helper.modal
        name="editSponsorModal"
        headline="Sponsor bearbeiten"
        submit-function="update"
    >
        <x-app.helper.form.input-text model="name"/>
        <x-app.helper.form.input-text model="url" type="url"/>
    </x-app.helper.modal>
    <x-app.helper.modal
        name="newSponsorModal"
        headline="neuen Sponsor anlegen"
        submit-function="create"
    >
        <x-app.helper.form.input-text model="name"/>
        <x-app.helper.form.input-text model="url" type="url"/>
    </x-app.helper.modal>
    <x-app.helper.delete-modal/>

</div>
