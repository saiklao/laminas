<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *  @ORM\Entity(repositoryClass="\Application\Repository\UserRepository")
 *  @ORM\Table(name="user")
 */

class User 
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    protected  $id;

    /**
     * @ORM\Column(name="name")
     */
    protected $name;

    /**
     * @ORM\Column(name="email")
     */
    protected $email;

    /**
     * @param string $email
     * @param string $name
     * @param int|null $id
     */
    public function __construct($email, $name, $id = null)
    {
        $this->email = $email;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

     /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

     /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}