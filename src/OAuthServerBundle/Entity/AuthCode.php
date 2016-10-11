<?php

namespace OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;
use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;

/**
 * AuthCode
 *
 * @ORM\Table(name="oauth_auth_code")
 * @ORM\Entity(repositoryClass="OAuthServerBundle\Repository\AuthCodeRepository")
 */
class AuthCode extends BaseAuthCode
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
     * @var Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $client;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     */
    protected $user;


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
