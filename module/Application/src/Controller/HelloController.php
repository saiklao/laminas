<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Db\Adapter\Adapter;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Entity\User;

class HelloController extends AbstractActionController
{
    /**
     * Entity manager
     * @var Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * manager
     * @var Application\Service\UserManager
     */
    private $userManager;

    /**
     * Constructor
     */
    public function __construct($entityManager, $userManager) 
    {
        $this->entityManager = $entityManager;
        $this->userManager = $userManager;
    }


    public function indexAction()
    {
        // $message = $this->params()->fromQuery('message', 'hello')

        // return new ViewModel(['message' => $message]);
        // return new ViewModel([
            
        // ]);

        //  // Example: Fetch all rows from a "your_table" table
        //  $sql = 'SELECT * FROM user';
        //  $result = $this->dbAdapter->query($sql)->execute();
 
        //  // Convert the result to an array
        //  $data = iterator_to_array($result);

        $user = $this->entityManager->getRepository(User::class)->findAll();
        // $data = iterator_to_array($result);
        
         return new ViewModel([
             'users' => $user,
         ]);
    }

    // private $dbAdapter;

    // public function __construct(Adapter $dbAdapter)
    // {
    //     $this->dbAdapter = $dbAdapter;
    // }

    
}
