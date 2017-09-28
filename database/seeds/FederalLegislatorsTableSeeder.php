<?php

use Illuminate\Database\Seeder;

class FederalLegislatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\FederalLegislator::class, 50)->create();
    }
}
