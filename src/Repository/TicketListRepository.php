<?php

namespace App\Repository;

use App\Entity\TicketList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TicketList|null find($id, $lockMode = null, $lockVersion = null)
 * @method TicketList|null findOneBy(array $criteria, array $orderBy = null)
 * @method TicketList[]    findAll()
 * @method TicketList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TicketListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TicketList::class);
    }

    // /**
    //  * @return TicketList[] Returns an array of TicketList objects
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
    public function findOneBySomeField($value): ?TicketList
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
