<?php

namespace App\Controller\TwigBundle;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/* This class contains function templateRender Every controller needs to use this function to 
  a twig template
 */
class Templating extends AbstractController
{
    /***
     * @param string $templateName
     * @param Array $data
     * $return Response
     */
    public function templateRender($templateName, $data= [])
    {
        return $this->render($templateName, $data);
    }
}