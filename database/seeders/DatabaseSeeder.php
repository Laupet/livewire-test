<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        User::factory()->count(50)->state([
            'created_at' => fn () => now()->subminutes(rand(0, 59))
        ])->create();

        // User::factory()->make()->save(); // FUNKER

        // User::factory()->count(3)->create(); // FUNKER
    }
}
