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
        $this->call(MembershipSeeder::class);
        $this->call(CompanyTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsSeeder::class);

        $this->call(AddIndustries::class);
        $this->call(AddSpecializationsData::class);
    }
}
