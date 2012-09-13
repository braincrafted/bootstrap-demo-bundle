<?php

/**
 * This file is part of BraincraftedBootstrapDemoBundle.
 * (c) 2012 Florian Eckerstorfer
 */

namespace Braincrafted\BootstrapDemoBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * City
 *
 * @category   Entity
 * @package    BraincraftedBootstrapBundle
 * @subpackage Entity
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */

class City
{
    /**
     * @var string
     * @Assert\Type("string")
     * @Assert\NotBlank
     * @Assert\Length(min="3", max="50")
     */
    protected $name;

    /**
     * @var integer
     * @Assert\Type("integer")
     * @Assert\Min(0)
     */
    protected $population;

    /**
     * @var string
     * @Assert\Type("string")
     * @Assert\Length(min="6", max="255")
     * @Assert\Email
     */
    protected $mayorEmail;

    /**
     * Sets the name
     *
     * @param string $name The name
     *
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Returns the name.
     *
     * @return string The name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the population.
     *
     * @param int $population The population
     *
     * @return City
     */
    public function setPopulation($population)
    {
        $this->population = $population;
        return $this;
    }

    /**
     * Returns the population.
     *
     * @return int The population
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Sets the email address of the mayor.
     *
     * @param string $mayorEmail The mayors email address
     *
     * @return City
     */
    public function setMayorEmail($mayorEmail)
    {
        $this->mayorEmail = $mayorEmail;
        return $this;
    }

    /**
     * Returns the email address of the mayor.
     *
     * @return string The mayors email address
     */
    public function getMayorEmail()
    {
        return $this->mayorEmail;
    }
}
