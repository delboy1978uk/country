<?php

namespace Tests\Del\Helper;

use Del\Factory\CountryFactory;
use Del\Helper\Flag;

class FlagHelperTest extends \Codeception\Test\Unit
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    public function testRenderFlag()
    {
        $country = CountryFactory::generate('GB');
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
