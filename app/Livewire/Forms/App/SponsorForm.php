<?php

namespace App\Livewire\Forms\App;

use App\Models\Sponsor;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class SponsorForm extends Form
{
    use WithFileUploads;

    #[Validate(['required'])]
    public $name = '';

    #[Validate(['required', 'url'])]
    public $url = '';

    public $image;

    public ?Sponsor $sponsor;

    public function loadSponsor($sponsorId) :bool
    {
        $sponsor = Sponsor::find($sponsorId);

        if (is_null($sponsor)) {
            return false;
        }
        $this->sponsor = $sponsor;
        $this->name = $sponsor->name;
        $this->url = $sponsor->url;

        return true;
    }

    public function clearSponsor() :void
    {
        $this->sponsor = null;
        $this->name = '';
        $this->url = '';
        $this->image = null;
    }

    public function create() :Sponsor
    {
        $this->validate();
        return Sponsor::create($this->except("sponsor"));
    }

    public function update() :Sponsor
    {
        $this->validate();
        return $this->sponsor->update($this->except("sponsor"));
    }

    public function delete() :bool
    {
        $path = "sponsors/{$this->sponsor->id}.png";
        Storage::disk("public")->delete($path);
        return $this->sponsor->delete();
    }

    public function storeImage()
    {
        if($this->image->extension() != "png"){
            return false;
        }
        return $this->image->storeAs(options: 'public', path: "sponsors", name: "{$this->sponsor->id}.{$this->image->extension()}");
    }

}
