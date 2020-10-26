<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CustomerController extends AbstractController
{
  /**
   * @Route("/client", name="client")
   *
   * @return void
   */
  public function acceuil(){
    return $this->render('customer.html.twig');
  }
  
}