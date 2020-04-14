<?php

namespace App\Repository;

use App\Entity\Bascets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bascets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bascets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bascets[]    findAll()
 * @method Bascets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BascetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bascets::class);
    }

    // /**
    //  * @return Bascets[] Returns an array of Bascets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bascets
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
