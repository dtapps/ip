<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

use DtApp\Curl\Client;
use DtApp\Curl\CurlException;

/**
 * 搜狐在线接口
 * Class SoHu
 * @package DtApp\Ip
 */
class SoHu extends BasicIp
{
    /**
     * 搜狐
     * @throws CurlException
     */
    public function get()
    {
        $url = "http://pv.sohu.com/cityjson?ie=utf-8";
        $curl = new Client();
        $res = $curl->getHttp($url, '', false);
        $res = str_replace("var returnCitySN = ", "", $res);
        $res = substr($res, 0, -1);
        $res = json_decode($res, true);
        return $res;
    }
}
