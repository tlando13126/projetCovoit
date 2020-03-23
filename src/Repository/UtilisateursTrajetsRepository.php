<?php

namespace App\Repository;

use App\Entity\UtilisateursTrajets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UtilisateursTrajets|null find($id, $lockMode = null, $lockVersion = null)
 * @method UtilisateursTrajets|null findOneBy(array $criteria, array $orderBy = null)
 * @method UtilisateursTrajets[]    findAll()
 * @method UtilisateursTrajets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateursTrajetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UtilisateursTrajets::class);
    }

    // /**
    //  * @return UtilisateursTrajets[] Returns an array of UtilisateursTrajets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UtilisateursTrajets
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
