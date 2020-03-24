<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use DtApp\Curl\Client;
use DtApp\Curl\CurlException;

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
        $curl = new Client();
        return $curl->getHttp($url, '', true);
    }
}
