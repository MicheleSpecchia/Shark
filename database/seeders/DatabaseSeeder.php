<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Park;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Jhon Doe',
            'email' => 'john@gmail.com'
        ]);
         
        Park::factory(6)->create(['user_id' => $user->id]);
        /*\App\Models\Listing::create([
            'title' => 'Laravel Junior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'MikiCorp',
            'location' => 'Galatina',
            'email' => 'mikicp@email.com',
            'website' => 'www.mikicp.com',
            'description' => 'pizza pasta and spaghetti'
        ]);


        \App\Models\Listing::create([
            'title' => 'Full Stack',
            'tags' => 'laravel, backend, api',
            'company' => 'MikiCorp',
            'location' => 'Sulitu',
            'email' => 'mikicp@email.com',
            'website' => 'www.mikicp.com',
            'description' => 'pizza pasta and sugo'
        ]);*/
    }
}