<?php

/*
 ************* Lesson 1 commands ****************
 ********** working with migrations *************
 * mysql -uroot -p -e "CREATE DATABASE laravel_pro"
 * php artisan migrate:install
 * php artisan migrate
 * php artisan make:migration create_companies_table
 * php artisan migrate:rollback
 * php artisan migrate:fresh --seed
 *
 *
 *********** Seeding database table *************
 * php artisan make:seeder CompaniesTableSeeder
 * php artisan db:seed --class=CompaniesTableSeeder
 * php artisan db:seed
 *
 *
 **************** Eloquent *******************
 * php artisan make:model Company
 * php artisan tinker
 * php artisan make:model Contact -m
 *
 *
 ************ Model Factories ****************
 * php artisan make:factory ContactFactory -m Contact
 * composer dump-autoload
 **/
