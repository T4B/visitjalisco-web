<?php

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
        $this->call(PageTableSeeder::class);
        $this->call(JaliscoTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
