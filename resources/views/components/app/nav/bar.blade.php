<nav id="navbar" {{ $attributes->class(['navbar']) }}>
    <ul>
        <x-app.nav.link
            name="Startseite"
            url="/"
            active
        />

        <x-app.nav.dropdown
            name="Verein"
            active
        >
            <x-app.nav.link
                name="Mitglied werden"
                url="/mitglied"
            />
            <x-app.nav.link
                name="Neuigkeiten"
                url="/news"
            />
            <x-app.nav.link
                name="Trainings-Ausstattung"
                url="/equipment"
            />
            <x-app.nav.link
                name="weitere Angebote"
                url="/weitere"
            />
            <x-app.nav.link
                name="Vorstand"
                url="/vorstand"
            />
            <x-app.nav.link
                name="Ehrenrat"
                url="/ehrenrat"
            />

        </x-app.nav.dropdown>

        <x-app.nav.dropdown
            name="Trainingsangebote"

        >
            <x-app.nav.link
                name="Gewichtheben"
                url="/gewichtheben"
            />
            <x-app.nav.link
                name="Kraftdreikampf"
                url="/kraftdreikampf"
            />
            <x-app.nav.link
                name="Krafttraining"
                url="/krafttraining"
            />
            <x-app.nav.link
                name="Personal Training"
                url="/personal_training"
            />

        </x-app.nav.dropdown>

        <x-app.nav.link
            name="Kurse"
            url="/kurse"
        />

        <x-app.nav.link
            name="Kalender"
            url="kalender"
        />



    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
