<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace LiGuAngChUn\Ip;

use Exception;

/**
 * 错误处理
 * Class IpException
 * @package DtApp\Ip
 */
class IpException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
