<?php

namespace CarBundle\Repository;

/**
 * CarRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCarsWithDetails()
    {
        $qb = $this->createQueryBuilder('c');
        $qb->select('c, make, model');
        $qb->join('c.make', 'make');
        $qb->join('c.model', 'model');
        return $qb->getQuery()->getResult();
    }

    public function findCarWithDetailsById($id)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->select('c, make, model');
        $qb->join('c.make', 'make');
        $qb->join('c.model', 'model');
        $qb->where('c.id =:id');
        $qb->setParameter('id', $id);
        return $qb->getQuery()->getSingleResult();
    }
}
