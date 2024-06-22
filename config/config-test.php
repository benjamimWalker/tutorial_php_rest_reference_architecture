<?php

use ByJG\Config\DependencyInjection as DI;
use ByJG\Util\JwtKeySecret;

return [
    JwtKeySecret::class => DI::bind(JwtKeySecret::class)
        ->withConstructorArgs(['YBQIjUsVg94RocIiKR5lchygmYPLeZxK4rg61BG8tN9iUlFuldsoe/ISbruHiPRVppm2qK0ObDVcbN3EUsZ/JA=='])
        ->toSingleton(),
];

