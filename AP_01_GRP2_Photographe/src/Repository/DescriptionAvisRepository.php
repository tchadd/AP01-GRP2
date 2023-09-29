<?php

namespace App\Repository;

use App\Entity\DescriptionAvis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DescriptionAvis>
 *
 * @method DescriptionAvis|null find($id, $lockMode = null, $lockVersion = null)
 * @method DescriptionAvis|null findOneBy(array $criteria, array $orderBy = null)
 * @method DescriptionAvis[]    findAll()
 * @method DescriptionAvis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DescriptionAvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DescriptionAvis::class);
    }

//    /**
//     * @return DescriptionAvis[] Returns an array of DescriptionAvis objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DescriptionAvis
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
