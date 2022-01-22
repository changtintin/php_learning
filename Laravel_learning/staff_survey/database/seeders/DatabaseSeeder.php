<?php

namespace Database\Seeders;

use App\Models\Survey;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Survey::truncate();
        Survey::factory(40) -> create();
        Schema::enableForeignKeyConstraints();
    }
}
