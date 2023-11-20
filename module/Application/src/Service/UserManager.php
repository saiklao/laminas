<?php
namespace Application\Service;

use Application\Entity\User;

class UserManager
{
    /**
     * constructor here 
     */
    public function __construct($entityManger)
    {
        $this->entityManager = $entityManger;
    }

    // add new user
    public function addNewUser($data) 
    {
        $user = new User();
        $user->setName($data['name']);
        $user->setEmail($data['email']);

        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    // update user
    public function updateUser($user, $data) 
    {
        $user->setName($data['name']);
        $user->setEmail($data['email']);

        $this->entityManager->flush();
    }

    // delete user
    public function deleteUser($user)
    {
        $this->entityManager->remove($user);
        $this->entityManager->flush();
    }
}