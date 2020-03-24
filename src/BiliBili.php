<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use DtApp\Curl\Client;
use DtApp\Curl\CurlException;

class BiliBili extends BasicIp
{
    /**
     * 哔哩哔哩ip查询接口
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function get()
    {
        $url = "https://api.bilibili.com/x/web-interface/zone";
        $curl = new Client();
        return $curl->getHttp($url, '', true);
    }
}
