<?php

// #NOTICE: It dont have to be here, but new users can easly spot message below

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

use Aerys\{Host, Router, function root, Request, Response};

const AERYS_OPTIONS = Config::OPTIONS;

// $fallback = function(Request $req, Response $res) {
//     $html = '<pre>'
//         . var_export($req, true)
//         . '<hr />'
//         . var_export($res, true)
//         . '</pre>';
//
//     $res->end("<html><body>$html</body></html>");
// };

(new Host)
    ->expose("*", 1337)
    ->use(Routing::init())
    ->use(root($docrootPath = __DIR__))
;
