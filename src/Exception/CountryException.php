<?php

declare(strict_types=1);

namespace Del\Exception;

use Exception;

class CountryException extends Exception
{
    const ERROR_NOT_FOUND = 'Country not found.';
}
