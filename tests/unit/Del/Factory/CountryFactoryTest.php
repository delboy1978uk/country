<?php

namespace Tests\Del\Factory;

use Codeception\Test\Unit;
use Del\Exception\CountryException;

class CountryFactoryTest extends Unit
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    public function testGenerateCountry()
    {
        $country = CountryFactory::generate('GB');
        $this->assertInstanceOf('Del\Entity\Country', $country);
        $this->assertEquals('GBR',$country->getId());
        $this->assertEquals('GB',$country->getIso());
        $this->assertEquals('United Kingdom',$country->getName());
        $this->assertEquals(826,$country->getNumCode());
        $this->assertEquals('United-Kingdom-Flag.png',$country->getFlag());
        $this->assertEquals('Europe/London', $country->getTimezone()->getName());
    }

    public function testThrowsExceptionWhenBullshitCountryCodePassed()
    {
        $this->expectException(CountryException::class);
        CountryFactory::generate('ZZZ');
    }
}
