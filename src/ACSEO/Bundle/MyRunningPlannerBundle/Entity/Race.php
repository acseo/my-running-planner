<?php

namespace ACSEO\Bundle\MyRunningPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Race.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ACSEO\Bundle\MyRunningPlannerBundle\Entity\RaceRepository")
 */
class Race
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Number of meters of vertical ascension.
     *
     * @var int
     *
     * @ORM\Column(name="ascension", type="integer")
     * @Groups({"race_read", "race_write"})
     */
    private $ascension;

    /**
     * When the race will happen.
     *
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Groups({"race_read", "race_write"})
     */
    private $date;

    /**
     * Number of kilometers of the race.
     *
     * @var int
     *
     * @ORM\Column(name="distance", type="integer")
     * @Groups({"race_read", "race_write"})
     */
    private $distance;

    /**
     * Number of meters of vertical ascension.
     *
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255 )
     * @Groups({"race_read", "race_write"})
     */
    private $name;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Race
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set distance.
     *
     * @param int $distance
     *
     * @return Race
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance.
     *
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set ascension.
     *
     * @param int $ascension
     *
     * @return Race
     */
    public function setAscension($ascension)
    {
        $this->ascension = $ascension;

        return $this;
    }

    /**
     * Get ascension.
     *
     * @return int
     */
    public function getAscension()
    {
        return $this->ascension;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Race
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
