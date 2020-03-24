<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use DtApp\Curl\Client;
use DtApp\Curl\CurlException;

/**
 * lookup在线接口
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
        $curl = new Client();
        return $curl->getHttp($url, '', true);
    }
}
