<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class)->create([
            'name' => 'Estudar Laravel',
            'complete' => false,
        ]);

        factory(App\Task::class)->create([
            'name' => 'JavaScript',
            'complete' => false,
        ]);

        factory(App\Task::class)->create([
            'name' => 'Estudar NodeJs',
            'complete' => false,
        ]);

        factory(App\Task::class)->create([
            'name' => 'Estudar ES 6',
            'complete' => false,
        ]);
    }
}
