<?php

namespace App\Repository;

use App\Entity\MessageTexte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MessageTexte>
 *
 * @method MessageTexte|null find($id, $lockMode = null, $lockVersion = null)
 * @method MessageTexte|null findOneBy(array $criteria, array $orderBy = null)
 * @method MessageTexte[]    findAll()
 * @method MessageTexte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageTexteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MessageTexte::class);
    }

//    /**
//     * @return MessageTexte[] Returns an array of MessageTexte objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MessageTexte
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
