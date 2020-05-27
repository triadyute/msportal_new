<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['User', 'Access Authoriser', 'Change Control Authoriser', 'Change List Authoriser', 'Security', 'Datacenter Op']),
        'description' => $faker->sentence
    ];
});
$factory->state(Role::class, 'DC-OP', ['name' => 'Datacenter Op']);
$factory->state(Role::class, 'USER', ['name' => 'User']);
$factory->state(Role::class, 'CLA', ['name' => 'Change List Authoriser']);
$factory->state(Role::class, 'CCA', ['name' => 'Change Control Authoriser']);
$factory->state(Role::class, 'AA', ['name' => 'Access Authoriser']);