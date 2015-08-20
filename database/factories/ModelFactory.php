<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Pengguna::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->userName,
        'password' => Hash::make('password'),
        'nama_perusahaan' => $faker->company,
        'alamat_perusahaan' => $faker->address,
        'deskripsi_perusahaan' => $faker->realText(1000),
        'email' => $faker->email,
        'rating' => $faker->randomFloat(null,0,5),
        'jumlah_pemberi_rating' => mt_rand(1,99999),
        'video' => $faker->url,
        'tipe' => 'investor',
        'token' => $faker->randomNumber(3),
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear,
        'full_logo_perusahaan' => $faker->imageUrl(),
        'logo_perusahaan' => $faker->imageUrl(),
        'pushed_at' => $faker->dateTimeThisYear,
    ];
});

$factory->defineAs(\App\Pengguna::class, 'investor', function($faker) use ($factory) {
    $pengguna = $factory->raw(\App\Pengguna::class);
    return array_merge($pengguna, ['tipe' => 'investor']);
});

$factory->defineAs(\App\Pengguna::class, 'startup', function($faker) use ($factory) {
    $pengguna = $factory->raw(\App\Pengguna::class);
    return array_merge($pengguna, ['tipe' => 'startup']);
});