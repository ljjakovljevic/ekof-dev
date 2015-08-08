<?php

use Illuminate\Database\Seeder;


class StudyLevelsTableSeeder extends Seeder {

    public function run()
    {
        factory('App\StudyLevel')->create([
            'title' => 'Студије првог степена'
        ]);

        factory('App\StudyLevel')->create([
            'title' => 'Студије другог степена'
        ]);

        factory('App\StudyLevel')->create([
            'title' => 'Студије трећег степена'
        ]);
    }

}