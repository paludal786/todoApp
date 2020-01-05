<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {

    $user = factory(App\User::class)->create();
    return [

        'user_id' => $user->id,
        'task' => $faker->name,
        'time' => now()
    ];
});
