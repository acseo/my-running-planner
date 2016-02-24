<?php

namespace ACSEO\Bundle\MyRunningPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Training.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ACSEO\Bundle\MyRunningPlannerBundle\Entity\TrainingRepository")
 */
class Training
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Groups({"training_read", "training_write"})
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="repetition", type="integer")
     * @Groups({"training_read", "training_write"})
     */
    private $repetition;

    /**
     * @var int
     *
     * @ORM\Column(name="practiceDistance", type="integer")
     * @Groups({"training_read", "training_write"})
     */
    private $practiceDistance;

    /**
     * @var int
     *
     * @ORM\Column(name="recuperationDistance", type="integer")
     * @Groups({"training_read", "training_write"})
     */
    private $recuperationDistance;

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
     * @return Training
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
     * Set repetition.
     *
     * @param int $repetition
     *
     * @return Training
     */
    public function setRepetition($repetition)
    {
        $this->repetition = $repetition;

        return $this;
    }

    /**
     * Get repetition.
     *
     * @return int
     */
    public function getRepetition()
    {
        return $this->repetition;
    }

    /**
     * Set practiceDistance.
     *
     * @param int $practiceDistance
     *
     * @return Training
     */
    public function setPracticeDistance($practiceDistance)
    {
        $this->practiceDistance = $practiceDistance;

        return $this;
    }

    /**
     * Get practiceDistance.
     *
     * @return int
     */
    public function getPracticeDistance()
    {
        return $this->practiceDistance;
    }

    /**
     * Set recuperationDistance.
     *
     * @param int $recuperationDistance
     *
     * @return Training
     */
    public function setRecuperationDistance($recuperationDistance)
    {
        $this->recuperationDistance = $recuperationDistance;

        return $this;
    }

    /**
     * Get recuperationDistance.
     *
     * @return int
     */
    public function getRecuperationDistance()
    {
        return $this->recuperationDistance;
    }
}
