<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Accounts::class,
            Categories::class,
            Company::class,
            Currencies::class,
            Dashboards::class,
            EmailTemplates::class,
            Modules::class,
            Permissions::class,
            Reports::class,
            SampleData::class,
            Settings::class,
            TestCompany::class,
            User::class,
        ]);
    }
}
