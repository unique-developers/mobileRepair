<?php

namespace App\Controller\Modules;

use App\Controller\TwigBundle\Templating;

class Header
{
    public function index(Templating $templating, array $headerLinks)
    {
        $response = $templating->templateRender('header.html.twig', ['headerLinks' => $headerLinks, 'siteName' => $_ENV['SITE_NAME']]);
        // $response->setSharedMaxAge(3600);
        return $response;
    }
}
