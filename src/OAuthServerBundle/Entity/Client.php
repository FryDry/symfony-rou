<?php

namespace OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\OAuthServerBundle\Entity\Client as BaseClient;

/**
 * Client
 *
 * @ORM\Table(name="oauth_client")
 * @ORM\Entity(repositoryClass="OAuthServerBundle\Repository\ClientRepository")
 */
class Client extends BaseClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
