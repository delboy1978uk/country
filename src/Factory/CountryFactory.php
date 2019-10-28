<?php
/**
 * User: delboy1978uk
 * Date: 30/10/15
 * Time: 16:34
 */

namespace Del\Factory;

use Del\Entity\Country;
use InvalidArgumentException;

class CountryFactory
{
    private $countries;

    private function __construct(){}
    private function __clone(){}

    /**
     * @param string $id
     * @return Country
     */
    public static function generate($id)
    {
        static $inst = null;
        if($inst === null)
        {
            $inst = new CountryFactory();
            $inst->countries = require('countries.php');
        }

        if(!isset($inst->countries[$id])) {
            throw new InvalidArgumentException('No country found with that ID');
        }

        $c = $inst->countries[$id];


        $country = new Country();
        $country->setId($c['id'])
            ->setIso($c['iso'])
            ->setName($c['name'])
            ->setCountry($c['country'])
            ->setNumCode($c['numcode'])
            ->setFlag($c['flag']);

        return $country;
    }
}