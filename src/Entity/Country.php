<?php

namespace Del\Entity;


class Country
{
    /** @var string */
    private $id;

    /** @var  string */
    private $iso;

    /** @var string */
    private $name;

    /** @var string */
    private $country;

    /** @var  string */
    private $num_code;

    /** @var  string */
    private $flag;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Country
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * @param string $iso
     * @return Country
     */
    public function setIso($iso)
    {
        $this->iso = $iso;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumCode()
    {
        return $this->num_code;
    }

    /**
     * @param string $num_code
     * @return Country
     */
    public function setNumCode($num_code)
    {
        $this->num_code = $num_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param string $flag
     * @return Country
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
        return $this;
    }
}
