<?php

namespace App\Controller\Modules;

use App\Controller\TwigBundle\Templating;
use App\Controller\ConfigService\ConfigService;
class Header
{
    public function index(Templating $templating, array $headerLinks, ConfigService $configService)
    {
        $response = $templating->templateRender('header.html.twig', ['headerLinks' => $headerLinks]);
        'prod' != $configService->getConfig('APP_ENV') ?: $response->setSharedMaxAge(3600);
        return $response;
    }
}
