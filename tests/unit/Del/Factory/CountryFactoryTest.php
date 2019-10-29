<?php

namespace Del\Factory;

use Codeception\TestCase\Test;
use Del\Exception\CountryException;
use InvalidArgumentException;

class CountryFactoryTest extends Test
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
    }

    public function testThrowsExceptionWhenBullshitCountryCodePassed()
    {
        $this->expectException(CountryException::class);
        CountryFactory::generate('ZZZ');
    }
}
