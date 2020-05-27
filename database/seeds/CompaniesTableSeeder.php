<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Company::class)->create(['name' => 'Digicel']);
        factory(\App\Company::class, 2)->create();
    }
}
