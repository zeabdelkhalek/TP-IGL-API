<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
$promos = ['1cp','2cp','1cs','2cs','3cs'];
$sections = ['A','B','C'];
$groupes = ['01','02','03','04','05','06','07','08','09','10'];


    return [
        'matricule' => $faker->randomNumber(6),
        'email' => $faker->email,
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'adresse' => $faker->address,
        'commune' => $faker->state,
        'wilaya' => $faker->city,
        'phone' => $faker->e164PhoneNumber,
        'promo' => $promos[array_rand($promos)],
        'section' => $sections[array_rand($sections)],
        'groupe' => $groupes[array_rand($groupes)],
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
