<?php

namespace ACSEO\Bundle\MyRunningPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Training
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ACSEO\Bundle\MyRunningPlannerBundle\Entity\TrainingRepository")
 */
class Training
{
    /**
     * @var integer
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
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="repetition", type="integer")
     */
    private $repetition;

    /**
     * @var integer
     *
     * @ORM\Column(name="practiceDistance", type="integer")
     */
    private $practiceDistance;

    /**
     * @var integer
     *
     * @ORM\Column(name="recuperationDistance", type="integer")
     */
    private $recuperationDistance;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Training
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set repetition
     *
     * @param integer $repetition
     * @return Training
     */
    public function setRepetition($repetition)
    {
        $this->repetition = $repetition;

        return $this;
    }

    /**
     * Get repetition
     *
     * @return integer 
     */
    public function getRepetition()
    {
        return $this->repetition;
    }

    /**
     * Set practiceDistance
     *
     * @param integer $practiceDistance
     * @return Training
     */
    public function setPracticeDistance($practiceDistance)
    {
        $this->practiceDistance = $practiceDistance;

        return $this;
    }

    /**
     * Get practiceDistance
     *
     * @return integer 
     */
    public function getPracticeDistance()
    {
        return $this->practiceDistance;
    }

    /**
     * Set recuperationDistance
     *
     * @param integer $recuperationDistance
     * @return Training
     */
    public function setRecuperationDistance($recuperationDistance)
    {
        $this->recuperationDistance = $recuperationDistance;

        return $this;
    }

    /**
     * Get recuperationDistance
     *
     * @return integer 
     */
    public function getRecuperationDistance()
    {
        return $this->recuperationDistance;
    }
}
