<?php

namespace App\Repository;

use App\Entity\SemainesFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SemainesFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SemainesFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SemainesFormation[]    findAll()
 * @method SemainesFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SemainesFormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SemainesFormation::class);
    }

    // /**
    //  * @return SemainesFormation[] Returns an array of SemainesFormation objects
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
    public function findOneBySomeField($value): ?SemainesFormation
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
