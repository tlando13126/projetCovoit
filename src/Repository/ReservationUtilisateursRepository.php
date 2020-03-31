<?php

namespace App\Repository;

use App\Entity\ReservationUtilisateurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ReservationUtilisateurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationUtilisateurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationUtilisateurs[]    findAll()
 * @method ReservationUtilisateurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationUtilisateursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationUtilisateurs::class);
    }

    // /**
    //  * @return ReservationUtilisateurs[] Returns an array of ReservationUtilisateurs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReservationUtilisateurs
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
