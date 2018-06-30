<?php

namespace Esprit\RHBundle\Controller;

use Esprit\RHBundle\Entity\Candidat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RHBundle:Default:index.html.twig');
    }

    public function listCandidatsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository(Candidat::class)->findAll();
        return $this->render("RHBundle:Default:listCandidats.html.twig",array("cand" => $list));
    }

    public function affecterFormAction(Request $request,$cin){
        $candidat = $this->getDoctrine()->getManager()->getRepository(Candidat::class)->findOneBy(array("cin" => $cin));
        return $this->render("RHBundle:Default:AffecterEntret.html.twig",array("cand" => $candidat));
    }
}
