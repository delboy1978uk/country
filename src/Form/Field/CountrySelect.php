<?php

declare(strict_types=1);

namespace Del\Form\Field;

use Bone\User\Form\Transformer\CountryTransformer;
use Del\Repository\CountryRepository;

class CountrySelect extends Select
{
    public function init(): void
    {
        parent::init();
        $this->setLabel('Country');
        $this->setTransformer(new CountryTransformer());
        $countryRepository = new CountryRepository();
        $countries = $countryRepository->findAllCountries();
        $this->setOption('', '');

        foreach ($countries as $c) {
            $this->setOption($c->getIso(), $c->getName());
        }
    }
}
