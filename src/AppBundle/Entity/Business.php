<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name ="business")
 */

class Business {


  /**
   *@ORM\Id
   *@ORM\Column(type="integer")
   *@ORM\GeneratedValue(strategy="AUTO")
   */
  private $business_id;

  /**
   * @ORM\OneToMany(targetEntity="Mission", mappedBy="business")
   */

  private $mission;


/**
 * @ORM\Column(type="string", length=255)
 */
  private $business_name;
  /**
 * @ORM\Column(type="string", length=255, nullable=true)
 */
  private $business_adress;
   /**
 * @ORM\Column(type="string", length=255, nullable=true)
 */
  private $business_activity;

   /**
 * @ORM\Column(type="integer", nullable=true)
 */
  private $business_telephone;
   /**
 * @ORM\Column(type="string", length=255)
 */
  private $email;
/**
 * @ORM\Column(type="string", length=255)
 */
  private $password;
  /**
 * @ORM\Column(type="string", length=255, nullable=true)
 */
  private $image;


 public function __construct()
    {
        $this->mission = new ArrayCollection();
    }




    /**
     * Get businessId
     *
     * @return integer
     */
    public function getBusinessId()
    {
        return $this->business_id;
    }

    /**
     * Set businessName
     *
     * @param string $businessName
     *
     * @return Business
     */
    public function setBusinessName($businessName)
    {
        $this->business_name = $businessName;

        return $this;
    }

    /**
     * Get businessName
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Set businessAdress
     *
     * @param string $businessAdress
     *
     * @return Business
     */
    public function setBusinessAdress($businessAdress)
    {
        $this->business_adress = $businessAdress;

        return $this;
    }

    /**
     * Get businessAdress
     *
     * @return string
     */
    public function getBusinessAdress()
    {
        return $this->business_adress;
    }

    /**
     * Set businessActivity
     *
     * @param string $businessActivity
     *
     * @return Business
     */
    public function setBusinessActivity($businessActivity)
    {
        $this->business_activity = $businessActivity;

        return $this;
    }

    /**
     * Get businessActivity
     *
     * @return string
     */
    public function getBusinessActivity()
    {
        return $this->business_activity;
    }

    /**
     * Set businessTelephone
     *
     * @param integer $businessTelephone
     *
     * @return Business
     */
    public function setBusinessTelephone($businessTelephone)
    {
        $this->business_telephone = $businessTelephone;

        return $this;
    }

    /**
     * Get businessTelephone
     *
     * @return integer
     */
    public function getBusinessTelephone()
    {
        return $this->business_telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Business
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Business
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Business
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add mission
     *
     * @param \AppBundle\Entity\Mission $mission
     *
     * @return Business
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
}
