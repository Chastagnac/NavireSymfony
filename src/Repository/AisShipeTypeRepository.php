<?php

namespace App\Repository;

use App\Entity\AisShipeType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AisShipeType|null find($id, $lockMode = null, $lockVersion = null)
 * @method AisShipeType|null findOneBy(array $criteria, array $orderBy = null)
 * @method AisShipeType[]    findAll()
 * @method AisShipeType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AisShipeTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AisShipeType::class);
    }

    // /**
    //  * @return AisShipeType[] Returns an array of AisShipeType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AisShipeType
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
