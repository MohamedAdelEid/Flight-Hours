<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //         \App\Models\Admin::factory(10)->create();

        //         \App\Models\Admin::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//             'password' => '123456789'
//         ]);

        Job::factory(100)->create();
    }
}
