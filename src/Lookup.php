<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * lookup
 * Class Lookup
 * @package DtApp\Ip
 */
class Lookup extends BasicIp
{
    /**
     * lookup
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function get()
    {
        $url = "https://extreme-ip-lookup.com/json/";
        $get = new Get();
        return $get->http($url, '', true);
    }
}
