<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * 新浪
 * Class SiNa
 * @package DtApp\Ip
 */
class SiNa extends BasicIp
{
    /**
     * 新浪
     * @param string $ip IP地址
     * @return bool|false|mixed|string|string[]
     * @throws CurlException
     */
    public function get(string $ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        $url = "http://ip.ws.126.net/ipquery?ip={$ip}";
        $get = new Get();
        $res = $get->http($url, '', false);
        $res = iconv('gbk', 'utf-8', $res);
        $res = substr($res, strpos($res, "{"));
        $res = substr($res, 0, -2);
        $res = str_replace("city", '"city"', $res);
        $res = str_replace("province", '"province"', $res);
        $res = json_decode($res, true);
        return $res;
    }
}
