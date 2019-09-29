<?php

namespace Del\Helper;

use Del\Factory\CountryFactory;

class FlagHelperTest extends \Codeception\TestCase\Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    public function testRenderFlag()
    {
        $country = CountryFactory::generate('GBR');
        $flag = Flag::render($country,'large');
        $this->assertStringContainsString('<img src="data:',$flag);
        $flag = Flag::render($country,'medium');
        $this->assertStringContainsString('<img src="data:',$flag);
        $flag = Flag::render($country,'small');
        $this->assertStringContainsString('<img src="data:',$flag);
        $flag = Flag::render($country,'tiny');
        $this->assertStringContainsString('<img src="data:',$flag);
    }
}
