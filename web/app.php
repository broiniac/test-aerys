<?php

// <ignore>
if (!class_exists('Aerys\Process')) {
    if (PHP_MAJOR_VERSION < 7) {
        echo "To run aerys, you need to run it with PHP 7.\n";
    }
    echo "This file is not supposed to be invoked directly. To run it, use `php bin/aerys -c demo.php`.\n";
    die(1);
}

eval(file_get_contents(__FILE__, null, null, __COMPILER_HALT_OFFSET__));
__halt_compiler();
// </ignore>

use Aerys\{ Host, Request, Response, Router, Websocket, function root, function router, function websocket };

/* --- Global server options -------------------------------------------------------------------- */

const AERYS_OPTIONS = Config::OPTIONS;

/* --- http://localhost:1337/ ------------------------------------------------------------------- */

$router = Routing::init();

// If none of our routes match try to serve a static file
$root = root($docrootPath = __DIR__);

// If no static files match fallback to this
$fallback = function(Request $req, Response $res) {
    $res->end("<html><body><h1>Fallback \o/</h1></body></html>");
};

(new Host)
    ->expose("*", 1337)
    ->use($router)
    ->use($root)
    ->use($fallback);
