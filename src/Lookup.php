<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;

/**
 * lookup在线接口
 * Class Lookup
 * @package DtApp\Ip
 */
class Lookup
{
    /**
     * lookup接口
     * @var string
     */
    private $index_url = "https://extreme-ip-lookup.com/json/";

    /**
     * lookup
     * @param $ip
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function onebox($ip = '')
    {
        $url = $this->index_url;
        $curl = new \DtApp\Curl\Client();
        return $curl->getHttp($url, '', true);
    }
}
