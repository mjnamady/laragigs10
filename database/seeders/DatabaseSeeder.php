<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Bostom, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem exercitationem vero adipisci quam incidunt dolore maxime fugit. Excepturi quae ea doloremque ipsa quasi molestias rem quisquam magni blanditiis ducimus.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend api',
        //     'company' => 'stack, overflow',
        //     'location' => 'Kaduna, Nigeria',
        //     'email' => 'musty@gmail.com',
        //     'website' => 'https://www.mjnamady.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem exercitationem vero adipisci quam incidunt dolore maxime fugit. Excepturi quae ea doloremque ipsa quasi molestias rem quisquam magni blanditiis ducimus.',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    
}
