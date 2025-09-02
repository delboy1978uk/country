<?php

declare(strict_types=1);

namespace Del\Traits;

use Bone\BoneDoctrine\Attributes\Visibility;
use Del\Entity\Country;
use Del\Factory\CountryFactory;
use Del\Form\Field\Attributes\Field;
use Del\Form\Field\CountrySelect;
use Doctrine\ORM\Mapping as ORM;

trait HasCountryTrait
{
    #[ORM\Column(type: 'string', length:3, nullable: false)]
    #[Field(rules: 'custom', fieldClass: CountrySelect::class)]
    #[Visibility('all')]
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
