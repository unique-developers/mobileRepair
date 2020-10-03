<?php
namespace App\Controller\Modules;

use App\Controller\ConfigService\ConfigService;
use App\Controller\TwigBundle\Templating;

class Contact
{
    public function index(Templating $templating, ConfigService $configService)
    {
        $response = $templating->templateRender('contact.html.twig');
        return $response;
    }
}