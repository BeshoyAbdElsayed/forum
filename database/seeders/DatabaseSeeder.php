<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
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
        User::factory(50)
            ->has(
                Thread::factory()->has(
                        Reply::factory(5)->state(function (array $attributes, Thread $thread) {
                            return [
                                'thread_id' => $thread->id,
                            ];
                        })
                    )
                )
            ->create();
    }
}
