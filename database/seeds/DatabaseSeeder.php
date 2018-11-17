<?php

use Illuminate\Database\Seeder;
use \App\Task as Task;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();

        factory(Task::class, 20)->create();
    }
}
