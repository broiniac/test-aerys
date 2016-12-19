<?php

class TwigEngineLoader {
    protected $twig;

    public function __construct() {
        $loader = new \Twig_Loader_Filesystem('app/Resources/views');
        $this->twig = new \Twig_Environment($loader, [
            'cache' => 'var/cache/views',
        ]);
    }

    public function init() {
        return $this->twig;
    }
}
