<?php

declare(strict_types=1);

namespace Del\Traits;

use Del\Entity\Country;
use Del\Factory\CountryFactory;
use Doctrine\ORM\Mapping as ORM;

trait HasCountryTrait
{
    #[ORM\Column(type: 'string', length:3, nullable: false)]
    private string $country;

    public function getCountry(): Country
    {
        return CountryFactory::generate($this->country);
    }

    public function setCountry(Country $country): void
    {
        $this->country = $country->getIso();
    }
}
