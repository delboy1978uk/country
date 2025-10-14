<?php

declare(strict_types=1);

namespace Del\Traits;

use Bone\BoneDoctrine\Attributes\Visibility;
use Del\Entity\Country;
use Del\Factory\CountryFactory;
use Del\Form\Field\Attributes\Field;
use Del\Form\Field\CountrySelect;
use Doctrine\ORM\Mapping as ORM;

trait HasOptionalCountry
{
    #[ORM\Column(type: 'string', length:3, nullable: true)]
    #[Field(rules: 'custom', fieldClass: CountrySelect::class)]
    #[Visibility('all')]
    private ?string $country  = null;

    public function getCountry(): ?Country
    {
        return $this->country ? CountryFactory::generate($this->country) : null;
    }

    public function setCountry(mixed $country): void
    {
        $this->country = $country instanceof Country ? $country->getIso() : null;
    }
}
