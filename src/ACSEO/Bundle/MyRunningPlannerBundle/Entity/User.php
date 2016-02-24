<?php

namespace ACSEO\Bundle\MyRunningPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table()
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
     * User email.
     *
     * @var string
     *
     * @Assert\Email()
     * @Groups({"user_read", "user_write"})
     */
    protected $email;

    /**
     * Plain password. Used for model validation. Must not be persisted.
     *
     * @var string
     *
     * @Assert\Length(min=4)
     * @Groups({"user_write"})
     */
    protected $plainPassword;

    /**
     * User name.
     *
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255 )
     * @Groups({"user_read", "user_write"})
     */
    private $name;

    public function setEmail($email)
    {
        parent::setEmail($email);
        $this->username = $email;

        return $this;
    }

    public function setEmailCanonical($emailCanonical)
    {
        parent::setEmailCanonical($emailCanonical);
        $this->usernameCanonical = $emailCanonical;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
        $this->username = $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
