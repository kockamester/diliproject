<?php

namespace Dili\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class UserController
 * @package Dili\AdminBundle\Controller
 */
class UserController extends Controller
{
    /**
     * @Route("/user" , name="user_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

}
