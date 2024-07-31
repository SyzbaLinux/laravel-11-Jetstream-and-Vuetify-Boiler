<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // MdsHfmEEFz-d0FvxCwIXv
        // 6foKMgnQkt-W8TuHjQSWa
        // lEqqjmwgLB-A9xFd3QXfK
        // Ylw7E3vh6q-7oXk2pc6mU
        // Vrg7QMhcuV-Ox6a04nKVy
        // 8WWbjJofMp-A4FaawYhax
        // c7XJSdLAdf-VKn7sutieo
        // WBexYZYAIj-JEbHH1Vxj9
    }
}
