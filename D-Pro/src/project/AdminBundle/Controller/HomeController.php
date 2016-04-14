<?php

namespace project\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
     public function indexAction()
    {
        return $this->render('projectAdminBundle:Home:index.html.twig');
    }
    
    

}
