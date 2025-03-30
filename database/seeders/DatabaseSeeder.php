<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        if(config("app.env") == "local") {
            $password = "password";
        }else{
            $password = Str::password(12);
        }

        $user = User::create([
            "name" => "super-admin",
            "email" => "admin@example.org",
            "password" => Hash::make($password),
        ]);

        $superAdmin = Role::create([
            "name" => "super-admin",
        ]);
        $user->assignRole($superAdmin);

        $this->command->info("  created super-admin with E-Mail admin@example.org and password $password");


        $this->call([
            SponsorSeeder::class,
        ]);
    }
}
