<?php


namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/medicijnen/Lijst",name="Lijstmedicijnen")
     *
     */
    public function showMedicijnenAction(){
        return $this->render('medicijnen/show.html.twig');
    }
}