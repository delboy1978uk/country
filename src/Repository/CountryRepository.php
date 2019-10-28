<?php

namespace Del\Repository;

use Del\CountryException;
use Del\Entity\Country;

class CountryRepository
{
    /** @var Country[] $countries */
    private $countries;

    /**
     * CountryRepository constructor.
     */
    public function __construct()
    {
        $this->countries = require_once __DIR__ . '/../Factory/countries.php';
    }

    public function findAllCountries()
    {
        $countries = [];

        foreach ($this->countries as $country) {
            $countries[] = $this->createFromArray($country);
        }
    }

    /**
     * @param string $id
     * @return Country
     * @throws CountryException
     */
    public function findCountryById(string $id): Country
    {
        if (isset($this->countries[$id])) {
            return $this->createFromArray($this->countries[$id]);
        }

        throw new CountryException(CountryException::ERROR_NOT_FOUND);
    }

    /**
     * @param string $id
     * @return Country
     * @throws CountryException
     */
    public function findCountryBy(string $key, string $value): Country
    {
        foreach ($this->countries as $country) {
            if ($country[$key] === $value) {
                return $this->createFromArray($this->countries[$id]);
            }
        }

        throw new CountryException(CountryException::ERROR_NOT_FOUND);
    }

    /**
     * @param array $data
     * @return Country
     */
    public function createFromArray(array $data): Country
    {
        $country = new Country();
        $country->setId($data['id'])
            ->setIso($data['iso'])
            ->setName($data['name'])
            ->setCountry($data['country'])
            ->setNumCode($data['numcode'])
            ->setFlag($data['flag']);

        return $country;
    }
}