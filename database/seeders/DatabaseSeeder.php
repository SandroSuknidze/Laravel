<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listings;
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
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Sandro',
            'email' => 'sandro@gmail.com'
        ]);

        Listings::factory(10)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listings::create([
        //     'title' => 'Gaming PC',
        //     'tags' => 'Electronics',
        //     'company' => 'Asus',
        //     'location' => 'USA',
        //     'price' => '999',
        //     'description' => 'magari kompia simon',
        // ]);
    }
}