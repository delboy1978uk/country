<?php

declare(strict_types=1);

namespace Del\Repository;

use Del\Exception\CountryException;
use Del\Entity\Country;
use Del\Factory\CountryList;

class CountryRepository
{
    /** @var Country[] $countries */
    private array $countries;

    public function __construct()
    {
        $list = new CountryList();
        $this->countries = $list->getCountries();
    }

    /**  @return Country[]  */
    public function findAllCountries(): array
    {
        $countries = [];

        foreach ($this->countries as $country) {
            $countries[] = $this->createFromArray($country);
        }

        return $countries;
    }

    /** @throws CountryException  */
    public function findCountryByIsoCode(string $id): Country
    {
        if (isset($this->countries[$id])) {
            return $this->createFromArray($this->countries[$id]);
        }

        throw new CountryException(CountryException::ERROR_NOT_FOUND);
    }

    /** @throws CountryException */
    public function findCountryBy(string $key, string $value): Country
    {
        foreach ($this->countries as $country) {
            if ($country[$key] === $value) {
                return $this->createFromArray($this->countries[$id]);
            }
        }

        throw new CountryException(CountryException::ERROR_NOT_FOUND);
    }

    public function createFromArray(array $data): Country
    {
        $country = new Country();
        $country->setId($data['id']);
        $country->setIso($data['iso']);
        $country->setName($data['name']);
        $country->setNumCode($data['numcode']);
        $country->setFlag($data['flag']);

        return $country;
    }
}
