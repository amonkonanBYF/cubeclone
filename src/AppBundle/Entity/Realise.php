<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name ="realise")
 */

class Realise {


  /**
   *@ORM\Id
   *@ORM\Column(type="integer")
   *@ORM\GeneratedValue(strategy="AUTO")
   */
  private $realise_id;


  /**
   * @ORM\OneToMany(targetEntity="Mission", mappedBy="user")
   */
  private $mission;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="realise")
   * @ORM\JoinColumn(name="user", referencedColumnName="id")
   */
  private $user;




 /**
  * @ORM\Column(type="datetime", nullable=true)
  */
 private $date;

/**
 * @ORM\Column(type="boolean", nullable=true)
 */
 private $validated = false ;







 public function __construct(User $user)
    {
        $this->mission = new ArrayCollection();
        $this->user = $user;
        $this->date = new \Datetime("now");

    }




    /**
     * Get realiseId
     *
     * @return integer
     */
    public function getRealiseId()
    {
        return $this->realise_id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Realise
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
     * Set validated
     *
     * @param boolean $validated
     *
     * @return Realise
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Add mission
     *
     * @param \AppBundle\Entity\Mission $mission
     *
     * @return Realise
     */
    public function addMission(\AppBundle\Entity\Mission $mission)
    {
        $this->mission[] = $mission;

        return $this;
    }

    /**
     * Remove mission
     *
     * @param \AppBundle\Entity\Mission $mission
     */
    public function removeMission(\AppBundle\Entity\Mission $mission)
    {
        $this->mission->removeElement($mission);
    }

    /**
     * Get mission
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Realise
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
