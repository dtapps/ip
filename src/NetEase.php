<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * 网易
 * Class NetEase
 * @package LiGuAngChUn\Ip
 */
class NetEase extends BasicIp
{
    /**
     * 网易IP查询接口
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function get()
    {
        $url = "https://ipservice.3g.163.com/ip";
        $get = new Get();
        return $get->http($url, '', true);
    }
}
