<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * 哔哩哔哩
 * Class BiliBili
 * @package LiGuAngChUn\Ip
 */
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
        $get = new Get();
        return $get->http($url, '', true);
    }
}
