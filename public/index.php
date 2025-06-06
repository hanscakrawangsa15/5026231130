<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Facades;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel        
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/'.ltrim($uri, '/'))) {
    return false;
}

require_once __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
