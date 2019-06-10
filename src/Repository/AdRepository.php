<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 10/06/2019
 * Time: 11:03
 */

namespace App\Repository;


use App\Entity\Ad;

class AdRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ad::class);
    }
}