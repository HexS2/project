<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 10/06/2019
 * Time: 11:06
 */

namespace App\Service;


use App\Entity\Ad;

class AdService
{
    private $om;

    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    public function getAll()
    {
        $repo = $this->om->getRepository(Ad::class);
        return $repo->findAll();
    }

    public function getOne($id)
    {
        $repo = $this->om->getRepository(Ad::class);
        return $repo->find($id);
    }

    public function search($name, $sort, $page)
    {
        $repo = $this->om->getRepository(Ad::class);
        return $repo->search($name, $sort, $page);
    }

    public function count()
    {
        $repo = $this->om->getRepository(Ad::class);
        return $repo->countIncoming();
    }

    public function add($event)
    {
        $repo = $this->om->getRepository(Ad::class);
        $user = $repo->find(1);
        $event->setOwner($user);

        $this->setupMedia($event);

        $this->om->persist($event);
        $this->om->flush();
    }
}