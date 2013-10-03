<?php

namespace Shop\BookshopBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $firstname;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $lastname;

    /**
     *
     * @ORM\Column(type="integer", length=9)
     */
    protected $phone;

    /**
     *
     * @ORM\Column(type="integer", length=1)
     */
    protected $gender;

    /**
     *
     *  @ORM\Column(type="integer")
     */
    protected $billing_address_id;

    /**
     *
     *  @ORM\Column(type="integer")
     */
    protected $shipping_address_id;

    public function __construct()
    {
        parent::__construct();
    }

}