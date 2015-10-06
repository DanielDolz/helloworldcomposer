<?php

require __DIR__ . "/vendor/autoload.php";

class Hello
{
    public $faker;

    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Faker\Factory::create();

    }

    public function sayHello()
    {
        echo "Hola " . $this->faker->name . "!\n";
    }
}