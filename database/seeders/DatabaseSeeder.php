<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
            StageSeeder::class,
            SubjectSeeder::class,
            StudentSeeder::class,
            TimeSeeder::class,
            ExamSeeder::class,
            NewsLetterSeeder::class,
            NotificationSeeder::class,
        ]);
    }
}
