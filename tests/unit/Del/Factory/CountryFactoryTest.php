<?php

namespace Del\Factory;


class CountryFactoryTest extends \Codeception\TestCase\Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;



    protected function _before()
    {

    }

    protected function _after()
    {

    }

    public function testGenerateCountry()
    {
        $country = CountryFactory::generate('GBR');
        $this->assertInstanceOf('Del\Entity\Country', $country);
        $this->assertEquals('GBR',$country->getId());
        $this->assertEquals('GB',$country->getIso());
        $this->assertEquals('UNITED KINGDOM',$country->getName());
        $this->assertEquals('United Kingdom',$country->getCountry());
        $this->assertEquals(826,$country->getNumCode());
        $this->assertEquals('United-Kingdom-Flag.png',$country->getFlag());
    }

    public function testThrowsExceptionWhenBullshitCountryCodePassed()
    {
        $this->setExpectedException('InvalidArgumentException');
        CountryFactory::generate('ZZZ');
    }
}
