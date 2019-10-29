<?php

namespace Del\Factory;

use Del\Entity\Country;
use Del\CountryException;
use Del\Repository\CountryRepository;

class CountryFactory
{
    /**
     * @var CountryRepository $countryRepository
     */
    private $countryRepository;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * @param string $id
     * @return Country
     */
    public static function generate(string $id): Country
    {
        static $inst = null;

        if ($inst === null) {
            $inst = new CountryFactory();
            $inst->countryRepository = new CountryRepository();
        }

        $data = $inst->countryRepository->findCountryByIsoCode($id);

        return  $inst->countryRepository->createFromArray($data);
    }

    /**
     * @param CountryRepository $countryRepository
     */
    public function setCountryRepository(CountryRepository $countryRepository): void
    {
        $this->countryRepository = $countryRepository;
    }
}
