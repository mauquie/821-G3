<?php

namespace App\Repository;

use App\Entity\Talkticket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Talkticket|null find($id, $lockMode = null, $lockVersion = null)
 * @method Talkticket|null findOneBy(array $criteria, array $orderBy = null)
 * @method Talkticket[]    findAll()
 * @method Talkticket[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TalkticketRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Talkticket::class);
    }

    // /**
    //  * @return Talkticket[] Returns an array of Talkticket objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Talkticket
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
