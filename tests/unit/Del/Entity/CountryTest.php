<?php

namespace Del\Entity;


class CountryTest extends \Codeception\Test\Unit
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    /**
     * @var Country
     */
    protected $country;

    protected function _before()
    {
        // create a fresh blank class before each test
        $this->country = new Country();
    }

    protected function _after()
    {
        // unset the country class after each test
        unset($this->country);
    }

    public function testGetSetId()
    {
        $this->country->setId('GBR');
        $this->assertEquals('GBR',$this->country->getId());
    }

    public function testGetSetIso()
    {
        $this->country->setIso('GB');
        $this->assertEquals('GB',$this->country->getIso());
    }

    public function testGetSetName()
    {
        $this->country->setName('Great Britain');
        $this->assertEquals('Great Britain',$this->country->getName());
    }

    public function testGetSetNumCode()
    {
        $this->country->setNumCode(826);
        $this->assertEquals(826,$this->country->getNumCode());
    }

    public function testGetSetFlag()
    {
        $this->country->setFlag('United-Kingdom-Flag.png');
        $this->assertEquals('United-Kingdom-Flag.png',$this->country->getFlag());
    }

}
