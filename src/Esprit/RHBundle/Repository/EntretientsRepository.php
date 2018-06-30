<?php
namespace Esprit\RHBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EntretientsRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()->createQuery(
        'SELECT e FROM RHBundle:Entretient e join RHBundle:Candidat c with c.cin = e.cin ORDER BY c.cin DESC')
        ->getResult();
    }
}