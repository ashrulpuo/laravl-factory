<?php

use Illuminate\Database\Seeder;

class ordersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\orders', 1000)->create();
    }
}
