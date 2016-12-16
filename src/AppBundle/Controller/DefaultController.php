<?php

namespace AppBundle\Controller;

use Aerys\{Request, Response};

/**
 * Class ArticleController
 * @package AppBundle\Controller
 */
class DefaultController
{
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

        $res->end("
            <html><body>
                <h1>Hello World, $vars!</h1>
            </body></html>
        ");
    }
}
