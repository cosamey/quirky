<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->cleanMedia();

        $this->call([
            UserSeeder::class,
        ]);
    }

    private function cleanMedia(): void
    {
        File::deleteDirectory(storage_path('app/public/media'));
        File::deleteDirectory(storage_path('app/private/media'));
    }
}
