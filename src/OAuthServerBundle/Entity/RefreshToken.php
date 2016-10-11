<?php

namespace OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\OAuthServerBundle\Entity\RefreshToken as BaseRefreshToken;
use UserBundle\Entity\User;

/**
 * RefreshToken
 *
 * @ORM\Table(name="oauth_refresh_token")
 * @ORM\Entity(repositoryClass="OAuthServerBundle\Repository\RefreshTokenRepository")
 */
class RefreshToken extends BaseRefreshToken
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
