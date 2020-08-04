<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'address' => $faker->address,
        'company_id' => Company::pluck('id')->random()
    ];
});

/*

php artisan tinker
factory(App\Contact::class)
factory(App\Contact::class)->create()
factory(App\Contact::class, 5)->create()
factory(App\Contact::class, 5)->make()
factory(App\Contact::class)->make()

php artisan make:seeder ContactTableSeeder
php artisan db:seed
composer dump-autoload
php artisan db:seed
php artisan migrate:fresh --seed

*/
