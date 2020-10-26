<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

  public function home(){
    return $this->render('home.html.twig');
  }

  /**
   * @Route("/home", name="home")
   *
   * @return void
   */
  public function acceuil(){
    return $this->render('home.html.twig');
  }
  
}