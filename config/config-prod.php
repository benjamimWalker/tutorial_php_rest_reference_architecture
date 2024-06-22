<?php

use ByJG\Config\DependencyInjection as DI;
use ByJG\Util\JwtKeySecret;

return [
    JwtKeySecret::class => DI::bind(JwtKeySecret::class)
        ->withConstructorArgs(['3utBFkHvgKvcxJRyR2QngyOngWYq5os4Qxkd7S4zNteV+gv3o2cjkrrvwjYw/T5sdC+9wpnLATksh5dTD0GpbQ=='])
        ->toSingleton(),
];
