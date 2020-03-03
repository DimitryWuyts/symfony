<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\AboutMe;

class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning")
     */


    public function index()
    {
        $user = new AboutMe();
        return $this->render('learning/index.html.twig', [
            'controller_name' => $user->getText(),
            'controller_text' => $user->getName()
        ]);
    }
}
