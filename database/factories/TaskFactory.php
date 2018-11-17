<?php

use Faker\Generator as Faker;
use \App\Task as Task;
$factory->define(Task::class, function (Faker $faker) {
    return [
        'task' => $faker->realText(20),
        'completed' => $faker->numberBetween(0,1)
    ];
});
