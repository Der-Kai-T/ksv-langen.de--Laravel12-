<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SponsorSeeder extends Seeder
{
    public function run(): void
    {
        $file = "database/seeders/data/sponsors/sponsors.csv";
        if(!is_file($file)){
            return;
        }
        $sponsors = file_get_contents($file);

        foreach (explode("\n", $sponsors) as $sponsor) {
            $sponsor = explode(";", $sponsor);
            if (count($sponsor) != 3) {
                continue;
            }
            $newSponsor = Sponsor::create([
                "name" => $sponsor[1],
                "url" => $sponsor[2],
            ]);

            Storage::disk("public")
                ->copy("import/sponsors/{$sponsor[0]}.png", "sponsors/{$newSponsor->id}.png");
        }
    }
}
