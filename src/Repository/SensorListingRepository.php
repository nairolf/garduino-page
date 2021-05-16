<?php

namespace App\Repository;

use App\Entity\SensorListing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SensorListing|null find($id, $lockMode = null, $lockVersion = null)
 * @method SensorListing|null findOneBy(array $criteria, array $orderBy = null)
 * @method SensorListing[]    findAll()
 * @method SensorListing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SensorListingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SensorListing::class);
    }

    // /**
    //  * @return SensorListing[] Returns an array of SensorListing objects
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
    public function findOneBySomeField($value): ?SensorListing
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
