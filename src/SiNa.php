<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;

/**
 * 新浪在线接口
 * Class SiNa
 * @package DtApp\Ip
 */
class SiNa extends Client
{
    /**
     * 新浪接口
     * @var string
     */
    private $query_url = "http://ip.ws.126.net/ipquery";

    /**
     * 新浪
     * @param string $ip IP地址
     * @return bool|false|mixed|string|string[]
     * @throws CurlException
     * @throws IpException
     */
    protected function query($ip = '')
    {
        if (empty($ip)) throw new IpException('IP地址不能为空');
        $url = $this->query_url . "?ip={$ip}";
        $curl = new \DtApp\Curl\Client();
        $res = $curl->getHttp($url, '', false);
        $res = iconv('gbk', 'utf-8', $res);
        $res = substr($res, strpos($res, "{"));
        $res = substr($res, 0, -2);
        $res = str_replace("city", '"city"', $res);
        $res = str_replace("province", '"province"', $res);
        $res = json_decode($res, true);
        return $res;
    }
}
