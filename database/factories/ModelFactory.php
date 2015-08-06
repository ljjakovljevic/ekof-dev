<?php


$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Faculty::class, function () {
    return [
        'founder'           => 'Република Србија',
        'university'        => 'Универзитет у Београду',
        'slug'              => 'универзитет-у-београду–економски-факултет',
        'title'             => 'Универзитет у Београду – Економски факултет',
        'short_title'       => 'Економски факултет у Београду',
        'street'            => 'Каменичка 6',
        'postal_code'       => '11000',
        'city'              => 'Београд',
        'phone'             => '+381 (0) 11 30 21 222',
        'fax'               => '+381 (0) 11 26 39 560',
        'email'             => 'dekanat@екоf.bg.ac.rs',
        'website'           => 'www.ekof.bg.ac.rs',
        'registration_no'   => '2590019937',
        'activity_code'     => '8542',
        'activity_desc'     => 'Високо образовање',
        'identification_no' => '07001983',
        'bank_account'      => '840-1109666-73',
        'bank'              => 'Министарство финансија - Управа за трезор, Филијала Стари град',
        'foreign_payments'  => 'Народна банка Србије',
        'pib'               => '100223295',
        'pdv'               => '149923697'
    ];
});
