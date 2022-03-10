<?php

namespace Del\Helper;

use Del\Image;
use Del\Entity\Country;

class Flag
{
    /**
     * @param Country $country
     * @param $size
     * @return string
     */
    public static function render(Country $country, $size)
    {
        $path = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'flags' . DIRECTORY_SEPARATOR . $size . DIRECTORY_SEPARATOR;
        $img = new Image($path . $country->getFlag());
        $header = $img->getHeader();

        ob_start();
        $img->output();
        $img->destroy();
        $i = ob_get_clean();

        return ('<img src="data:' . $header . ';base64,' . base64_encode($i) . '" />');
    }
}
