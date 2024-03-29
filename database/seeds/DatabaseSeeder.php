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
        $this->call(CountrySeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JobCategorySeeder::class);
        $this->call(EventCategorySeeder::class);
        $this->call(JobPostSeeder::class);
        $this->call(AppliedJobSeeder::class);
        $this->call(CandidateSeeder::class);
        $this->call(NewPassportSeeder::class);
    }
}
