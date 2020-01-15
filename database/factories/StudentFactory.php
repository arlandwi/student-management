<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'nisn' => $faker->numberBetween(1000, 9999),
        'name' => $faker->name,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender' => $faker->randomElement(['L', 'P']),
        'religion' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
        'address' => $faker->address,
    ];
});
