<?php
namespace Esprit\RHBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CandidatsRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()->createQuery(
        'SELECT c FROM RHBundle:Candidat c ORDER BY c.nom DESC')
        ->getResult();
    }
}