<?php

namespace OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\OAuthServerBundle\Entity\AccessToken as BaseAccessToken;
use UserBundle\Entity\User;

/**
 * AccessToken
 *
 * @ORM\Table(name="oauth_access_token")
 * @ORM\Entity(repositoryClass="OAuthServerBundle\Repository\AccessTokenRepository")
 */
class AccessToken extends BaseAccessToken
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
