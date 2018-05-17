<?php

namespace IgnisIndex\IgnisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IgnisIndex/IgnisBundle/Default/index.html.twig');
    }
}
