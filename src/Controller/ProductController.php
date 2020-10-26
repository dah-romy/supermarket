<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
  /**
   * @Route("/produit", name="product")
   *
   * @return void
   */
  public function acceuil(){
    return $this->render('product.html.twig');
  }

  /**
   * @Route("/cart", name="cart")
   *
   * @return void
   */
  public function cart(){
    return $this->render("cart.html.twig");
  }
  
}