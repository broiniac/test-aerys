<?php

namespace AppBundle\Controller;

use Aerys\{Request, Response};

/**
 * Class ArticleController
 * @package AppBundle\Controller
 */
class DefaultController
{
    // protected $twig;
    //
    // public function __construct($twig) {
    //     $this->twig = new \TwigEngineLoader()($loader, [
    //         'cache' => 'cache/views',
    //     ]);
    // }

    /**
     * @param Article $article
     * @return Response
     *
     * @Route("/artykul/{slug}", name="article_details")
     * @ParamConverter("article", class="AppBundle:Article")
     */
    public function helloAction(Request $req, Response $res, $vars = [])
    {
        $vars = var_export($vars, true);
        $twig = (new \TwigEngineLoader())->init();

        $string = $twig->render(
            'default/hello.html.twig',
            [
                'name' => $vars,
            ]
        );

        $res->end($string);
    }
}
