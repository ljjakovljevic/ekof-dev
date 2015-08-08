<?php

use Illuminate\Database\Seeder;


class ServicesTableSeeder extends Seeder {

    public function run()
    {
        factory('App\Service')->create([
            'title' => 'Услуге високог образовања (академске студије)'
        ]);

        factory('App\Service')->create([
            'title' => 'Услуге организовања и учествовања у реализацији заједничких студијских програма са другим образовним институцијама'
        ]);

        factory('App\Service')->create([
            'title' => 'Услуге организовања припремне наставе за полагање пријемног испита на економском факултету Универзитета у Београду'
        ]);

        factory('App\Service')->create([
            'title' => 'Разматрање захтева за признавање страних високошколских исправа ради запошљавања'
        ]);
    }

}