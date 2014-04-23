<?php

namespace Dili\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class DefaultController
 * @package Dili\AdminBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route(name="main")
     * @Template()
     */

    public function indexAction()
    {
        return $this->render(
            'DiliAdminBundle:Default:index.html.twig',
            array()
        );


    }
}