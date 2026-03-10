<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'course_key' => $faker->unique()->bothify('ROB-####'),
        'title' => $faker->sentence(3),
        'cover' => $faker->imageUrl(640, 480, 'technics'),
        'content' => $faker->paragraph,
        'kit_id' => rand(1, 3),
        'group_id' => rand(1, 5),
    ];
});
