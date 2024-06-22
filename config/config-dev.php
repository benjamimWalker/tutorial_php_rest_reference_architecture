<?php

use ByJG\Config\DependencyInjection as DI;
use Fern\Repository\ExampleCrudRepository;

return [
    ExampleCrudRepository::class => DI::bind(ExampleCrudRepository::class)
        ->withInjectedConstructor()
        ->toSingleton(),
];