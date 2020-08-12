<?php

namespace App\Controller\HomepageBundle;

use Symfony\Component\HttpFoundation\Response;
use App\Controller\TwigBundle\Templating;

class Homepage
{
    public function index(Templating $templating)
    {
        $response = $templating->templateRender('homepage.html.twig');
        return $response;
        // echo 'aa';die;
    }
}