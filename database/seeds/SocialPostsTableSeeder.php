<?php

use Illuminate\Database\Seeder;

class SocialPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\SocialPost::class, 50)->create();
    }
}
