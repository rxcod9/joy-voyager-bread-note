<?php

namespace Joy\VoyagerBreadNote\Database\Seeders;

use Joy\VoyagerBreadNote\Models\Note;
use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Note::query()->count() > 0) {
            return false;
        }

        $count = 20;
        Note::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Note ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Note Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
