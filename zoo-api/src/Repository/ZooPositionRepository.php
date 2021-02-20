<?php

namespace App\Repository;

use App\Entity\ZooPosition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ZooPosition|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZooPosition|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZooPosition[]    findAll()
 * @method ZooPosition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZooPositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZooPosition::class);
    }

    // /**
    //  * @return ZooPosition[] Returns an array of ZooPosition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ZooPosition
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
