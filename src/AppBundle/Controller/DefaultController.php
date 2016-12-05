<?php

namespace AppBundle\Controller;

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
    public function helloAction()
    {
        return 'Hello World!';
    }
}
