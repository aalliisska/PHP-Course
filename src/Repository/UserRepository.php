<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class UserRepository
{
  public function __construct(
    private EntityManagerInterface $em 
  )
  {

  }

  public function findById(int $id): ?User 
  {
    return $this->em->find(User::class, $id);
  }


}