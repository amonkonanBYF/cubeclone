<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\CouchDB\Mapping\Annotations as CouchDB;
use Symfony\Component\Validator\Constraints as Assert;
/**
 *@ORM\Entity
 *@ORM\Table(name ="user")
 */

class User extends BaseUser{


  /**
   *@ORM\Id
   *@ORM\Column(type="integer")
   *@ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;


/**
   * @ORM\OneToMany(targetEntity="Realise", mappedBy="user")
   */

  protected $realise;

   /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Please enter your firstname.", groups={"Registration", "Profile"})

     *
     */


  private $firstName;
  /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *@Assert\NotBlank(message="Please enter your lastname.", groups={"Registration", "Profile"})

     */
  private $lastName;

  /**
 * @ORM\Column(type="string", length=255, nullable=true)
 * @Assert\NotBlank(message="Please enter your adress.", groups={"Registration", "Profile"})

 */
  protected $adress;
   /**
 * @ORM\Column(type="string", length=255, nullable=true)
 * @Assert\NotBlank(message="Please enter your description.", groups={"Registration", "Profile"})

 */
  private $description;

   /**
 * @ORM\Column(type="integer", nullable=true)
 * @Assert\NotBlank(message="Please enter your telephone.", groups={"Registration", "Profile"})

 */
  private $telephone;

    /**
 * @ORM\Column(type="string",length=255, nullable=true)
 * @Assert\NotBlank(message="Please enter your city.", groups={"Registration", "Profile"})

 */
  private $city;

  /**
 * @ORM\Column(type="string",length=255, nullable=true)
 * @Assert\NotBlank(message="Please enter your country.", groups={"Registration", "Profile"})

 */
  private $country;


  /**
 * @ORM\Column(type="string", length=255, nullable=true)
 */
  private $image;




    /**
     * Constructor
     */
    public function __construct()
    {
        $this->realise = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return User
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
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
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }


    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
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
     * Add realise
     *
     * @param \AppBundle\Entity\Realise $realise
     *
     * @return User
     */
    public function addRealise(\AppBundle\Entity\Realise $realise)
    {
        $this->realise[] = $realise;

        return $this;
    }

    /**
     * Remove realise
     *
     * @param \AppBundle\Entity\Realise $realise
     */
    public function removeRealise(\AppBundle\Entity\Realise $realise)
    {
        $this->realise->removeElement($realise);
    }

    /**
     * Get realise
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRealise()
    {
        return $this->realise;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}
