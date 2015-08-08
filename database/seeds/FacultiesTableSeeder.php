<?php

use Illuminate\Database\Seeder;


class FacultiesTableSeeder extends Seeder {

    public function run()
    {
        factory('App\Faculty')->create();
    }

}