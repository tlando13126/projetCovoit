<?php

namespace App\Repository;

use App\Entity\SemaineFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SemaineFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SemaineFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SemaineFormation[]    findAll()
 * @method SemaineFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SemaineFormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SemaineFormation::class);
    }

    // /**
    //  * @return SemaineFormation[] Returns an array of SemaineFormation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SemaineFormation
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
