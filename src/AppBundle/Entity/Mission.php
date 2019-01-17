<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name ="mission")
 */

class Mission {


  /**
   *@ORM\Id
   *@ORM\Column(type="integer")
   *@ORM\GeneratedValue(strategy="AUTO")
   */
  private $mission_id;

 /**
   * @ORM\ManyToOne(targetEntity="Business", inversedBy="mission")
   * @ORM\JoinColumn(name="business", referencedColumnName="business_id")
   */

  private $business;

  /**
   * @ORM\ManyToOne(targetEntity="Realise" , inversedBy="mission")
   * @ORM\JoinColumn(name="user_real", referencedColumnName="realise_id")
   */

  private $user;



/**
 * @ORM\Column(type="string", length=255)
 */
  private $title;

   /**
 * @ORM\Column(type="string", length=255, nullable=true)
 */
  private $activity;

   /**
 * @ORM\Column(type="integer", nullable=true)
 */
  private $price;
   /**
 * @ORM\Column(type="string", length=255)
 */
  private $description;
/**
 * @ORM\Column(type="datetime", nullable=true)
 */
  private $dateAs;

  /**
 * @ORM\Column(type="datetime", nullable=true)
 */
  private $expired_on;

  /**
 * @ORM\Column(type="boolean", nullable=true)
 */
  private $publish;

  /**
 * @ORM\Column(type="string", length=255, nullable=true)
 */
  private $image;

  /**
 * @ORM\Column(type="text", nullable=true)
 */
  private $contenu;


public function __construct(){

    $this->dateAs  = new \Datetime();
    $this->expired_on  = new \Datetime();
    //$this->user = new ArrayCollection();
}



    /**
     * Get missionId
     *
     * @return integer
     */
    public function getMissionId()
    {
        return $this->mission_id;
    }




    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Mission
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Mission
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateAs
     *
     * @param \DateTime $dateAs
     *
     * @return Mission
     */
    public function setDateAs($dateAs)
    {
        $this->dateAs = $dateAs;

        return $this;
    }

    /**
     * Get dateAs
     *
     * @return \DateTime
     */
    public function getDateAs()
    {
        return $this->dateAs;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Mission
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
     * Set business
     *
     * @param \AppBundle\Entity\Business $business
     *
     * @return Mission
     */
    public function setBusiness(\AppBundle\Entity\Business $business = null)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Get business
     *
     * @return \AppBundle\Entity\Business
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Realise $user
     *
     * @return Mission
     */
    public function setUser(\AppBundle\Entity\Realise $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Realise
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Mission
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set activity
     *
     * @param string $activity
     *
     * @return Mission
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set expiredOn
     *
     * @param \DateTime $expiredOn
     *
     * @return Mission
     */
    public function setExpiredOn($expiredOn)
    {
        $this->expired_on = $expiredOn;

        return $this;
    }

    /**
     * Get expiredOn
     *
     * @return \DateTime
     */
    public function getExpiredOn()
    {
        return $this->expired_on;
    }

    /**
     * Set publish
     *
     * @param boolean $publish
     *
     * @return Mission
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * Get publish
     *
     * @return boolean
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Mission
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
