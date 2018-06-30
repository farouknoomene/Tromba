<?php

namespace Esprit\RHBundle\Controller;

use Esprit\RHBundle\Entity\Candidat;
use Esprit\RHBundle\Entity\Entretient;
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
    public function affecterDBAction(Request $request,$cin){
        $em = $this->getDoctrine()->getManager();
        $entretien = new Entretient();
        $entretien->setCin($em->getRepository(Candidat::class)->findOneBy(array("cin" => $cin)));
        $entretien->setDate(new \DateTime($request->get('dateentre')));
        $entretien->setHeure($request->get('heure').":".$request->get('minute'));
        $entretien->setType($request->get('type'));
        $entretien->setEtat(1);
        $em->persist($entretien);
        $em->flush();
        return $this->redirectToRoute('listcandidats');
    }

    public function showEntretiensAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository(Entretient::class)->findAllOrderedByName();
        return $this->render('RHBundle:Default:listEntretients.html.twig',array("list" => $list));
    }
}
