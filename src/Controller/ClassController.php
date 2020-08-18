<?php
// src/Controller/ClassController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassController extends AbstractController
{
    /**
     * @Route("/class/{class}")
     */
    public function class(string $class)
    {
        return $this->render('class/class.html.twig', [
            'class' => $class,
        ]);
    }
}
