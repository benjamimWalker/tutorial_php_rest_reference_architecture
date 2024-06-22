<?php

use ByJG\Cache\Psr16\BaseCacheEngine;
use ByJG\Cache\Psr16\FileSystemCacheEngine;
use ByJG\Config\DependencyInjection as DI;
use ByJG\Util\JwtKeySecret;

return [

    BaseCacheEngine::class => DI::bind(FileSystemCacheEngine::class)->toSingleton(),

    JwtKeySecret::class => DI::bind(JwtKeySecret::class)
        ->withConstructorArgs(['V8oStED+4wTd6WyY3AA6pK+RUUq+GHKk+8ZP7kD0zoiswzEQZ4nRqziItDIORTXLYDLiLdRVjvSpJ7czKFLm0w=='])
        ->toSingleton(),

];
