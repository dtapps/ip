<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * 太平洋
 * Class PConLine
 * @package DtApp\Ip
 */
class PConLine extends BasicIp
{
    /**
     * 太平洋
     * @param string $ip IP地址
     * @return bool|false|mixed|string
     * @throws CurlException
     */
    public function get(string $ip = '')
    {
        $url = "http://whois.pconline.com.cn/ipJson.jsp?json=true";
        if (!empty($ip)) $url = "http://whois.pconline.com.cn/ipJson.jsp?json=true&ip={$ip}";
        $get = new Get();
        $res = $get->http($url, '', false);
        preg_match('/{.+}/', $res, $res);
        $res = iconv('gbk', 'utf-8', $res[0]);
        $res = json_decode($res, true);
        return $res;
    }
}
