<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $faker = Faker::factory();

        for ($i = 0; $i < 200; $i++) {
            DB::table('todo_list_groups')->insert([
                'title' => fake()->sentence(4),
                'created_at' => now(),
            ]);
        }

        $groups = DB::table('todo_list_groups')->pluck('id');

        foreach ($groups as $group) {
            for ($i = 0; $i < 3; $i++) {
                DB::table('todo_items')->insert([
                    'title' => fake()->sentence(3),
                    'group_id' => $group,
                    'priority' => fake()->randomElement(['high', 'medium', 'low']),
                ]);
            }
        }
    }
}
