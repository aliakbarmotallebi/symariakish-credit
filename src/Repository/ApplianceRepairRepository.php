<?php

namespace App\Repository;

use App\Entity\ApplianceRepair;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ApplianceRepair>
 *
 * @method ApplianceRepair|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApplianceRepair|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApplianceRepair[]    findAll()
 * @method ApplianceRepair[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApplianceRepairRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApplianceRepair::class);
    }

    public function save(ApplianceRepair $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ApplianceRepair $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ApplianceRepair[] Returns an array of ApplianceRepair objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ApplianceRepair
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
