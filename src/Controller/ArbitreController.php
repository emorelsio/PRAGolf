<?php

namespace App\Controller;

use App\Entity\Competition;
use App\Utils\ExtractionJson;
use App\Utils\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArbitreController extends AbstractController
{
    /**
     * @Route("/arbitre", name="arbitre")
     */
    public function index(Request $request)
    {

        $team = new Team();
        $t=$team->equipeJauneTroisJoueur();

        $date = $team->getdate();
        $competition = $team->getCompet();

        return $this->render('arbitre/index.html.twig', array(
            't' => $t,
            'date' => $date,
            'competition' => $competition,
        ));
    }
}
