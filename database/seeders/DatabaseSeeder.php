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
        \App\Models\User::factory(3)->create();
        // $user = User::factory()->create([
        //     'name' => 'John Doe',
        //     'email' => 'john@gmail.com'
        // ]);

        // Listing::factory(6)->create([
        //     'user_id' => $user->id
        // ]);


// ------------------------------------ custom listings
        Listing::create([
            'user_id' => 1,
            'title' => 'Laravel-gig one',
            'tags' => 'laravel, javascript',
            'company' => 'Acm corp',
            'location' => 'MSA, KE',
            'email' => 'email@email.com',
            'website' => 'https://manyumbahousing.000webhostapp.com',
            'description' => 'Lorem ipsum retyu selfffilla ddfrdsrrffd
                            rfrfere fferttt ddccddd cdce csdcsr houjyu csdsd.'
        ]);
        Listing::create([
            'user_id' => 1,
            'title' => 'Back-end web dev',
            'tags' => 'django & flask',
            'company' => 'Acm corp',
            'location' => 'NAI, KE',
            'email' => 'email2@email.com',
            'website' => 'https://miles-op.x10.mx',
            'description' => 'Lorem ipsum retyu selfffilla ddfrdsrrffd rfrfere fferttt ddccddd cdce csdcsr houjyu csdsd.'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
