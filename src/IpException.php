<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace DtApp\Ip;

use Exception;

class IpException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
