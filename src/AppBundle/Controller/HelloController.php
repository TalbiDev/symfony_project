<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller {

  /**
   * @Route("/Bonjour/{name}", name="Bonjour")
   */
public function helloAction ($name)
  {
    return new Response ('Bonjour '.$name);
    //return $this->Redirect('https:\\www.google.com');
  }
}
 ?>
