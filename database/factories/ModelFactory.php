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
        'deskripsi_perusahaan' => $faker->realText(mt_rand(1000,1500)),
        'email' => $faker->email,
        'video' => $faker->url,
        'tipe' => 'investor',
        'token' => $faker->randomNumber(3),
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear,
        'full_logo_perusahaan' => $faker->imageUrl(),
        'logo_perusahaan' => $faker->imageUrl(),
        'pushed_at' => $faker->dateTimeThisYear,
        'saldo'=>$faker->randomNumber(5),
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

$factory->define(\App\Komentar::class, function(Faker\Generator $faker) {
   return [
        'email_komentator'=>$faker->email,
        'nama_komentator'=>$faker->name,
        'komentar'=>$faker->realText(),
        'rating_score'=>$faker->numberBetween(1,5),
        'created_at'=>$faker->dateTimeThisYear,
        'updated_at'=>$faker->dateTimeThisYear,
   ];
});

$factory->define(\App\Project::class, function(Faker\Generator $faker) {
   return [
        'project_title'=>$faker->sentence(mt_rand(3,6)),
        'project_post_date'=>$faker->dateTimeThisYear,
        'project_description'=>$faker->realText(mt_rand(1000,1500)),
        'project_image_url'=>$faker->imageUrl(),
        'created_at'=>$faker->dateTimeThisYear,
        'updated_at'=>$faker->dateTimeThisYear,
   ];
});