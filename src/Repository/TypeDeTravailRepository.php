<?php

namespace App\Repository;

use App\Entity\TypeDeTravail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeDeTravail>
 *
 * @method TypeDeTravail|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeDeTravail|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeDeTravail[]    findAll()
 * @method TypeDeTravail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeDeTravailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeDeTravail::class);
    }

//    /**
//     * @return TypeDeTravail[] Returns an array of TypeDeTravail objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeDeTravail
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
