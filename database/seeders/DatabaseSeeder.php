<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel 8',
        //     'tags' => 'laravel, php, framework, web development, javascript',
        //     'company' => 'Purplepatch.online',
        //     'location' => 'London, UK',
        //     'email' => 'email@gmail.com' ,
        //     'website' => 'https://laravel.com',
        //     'description' => 'Laravel 8 is the latest version of Laravel the latest version of Laravel the latest version of Laravel',
        // ]);

        // Listing::create([
        //     'title' => 'full-stack Engineer',
        //     'tags' => 'laravel, php, backend, api,web development, javascript',
        //     'company' => 'Purplepatch.online',
        //     'location' => 'London, UK',
        //     'email' => 'emailone@gmail.com' ,
        //     'website' => 'https://laravel.com',
        //     'description' => 'Laravel 8 is the latest version of Laravel the latest version of Laravel the latest version of Laravel',
        // ]);
    }
}
