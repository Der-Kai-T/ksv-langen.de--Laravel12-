<?php

namespace App\Livewire\App\Sponsors;

use App\Livewire\Forms\App\SponsorForm;
use App\Models\Sponsor;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Index extends Component
{

    use WithFileUploads;

    public SponsorForm $form;
    public $sponsors;

    public function mount(): void
    {
        $this->sponsors = Sponsor::all();
    }

    public function render(): View
    {

        return view('livewire.app.sponsors.index', [
            'sponsors' => $this->sponsors
        ]);
    }

    public function load($sponsorId): void
    {
        if (!$this->form->loadSponsor($sponsorId)) {
            Toaster::error("Fehler beim Laden des Sponsors");
        }
    }

    public function clear():void
    {
        $this->form->clearSponsor();
    }

    public function create(): void
    {
        if ($this->form->create()) {
            Toaster::success("Sponsor erfolgreich erstellt");
            $this->sponsors = Sponsor::all();
        } else {
            Toaster::error("Fehler beim Erstellen des Sponsors");
        }
        $this->form->clearSponsor();
    }

    public function update(): void
    {
        if ($this->form->update()) {
            Toaster::success("Sponsor erfolgreich bearbeitet");
            $this->sponsors = Sponsor::all();
        } else {
            Toaster::error("Fehler beim Erstellen des Sponsors");
        }
        $this->form->clearSponsor();
    }

    public function delete(): void
    {
        if ($this->form->delete()) {
            Toaster::success("Sponsor erfolgreich gelöscht");
            $this->sponsors = Sponsor::all();
        } else {
            Toaster::error("Fehler beim Löschen des Sponsors");
        }
        $this->form->clearSponsor();
    }

    public function storeImage(){
       if( $this->form->storeImage()){
           Toaster::success("Bild erfolgreich hochgeladen");
           $this->form->clearSponsor();
       }else{
           Toaster::error("Fehler beim Hochladen des Bildes. Dateiformat falsch?");
       }
        $this->form->clearSponsor();
    }
}
