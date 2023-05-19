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
         $this->call(DataBasesSeeder::class);
         $this->call(IdiomasSeeder::class);
         $this->call(ProgramingChargesSeeder::class);
         $this->call(SkillProgramingSeeder::class);
    }
}
