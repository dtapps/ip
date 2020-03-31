<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * 搜狐
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
        $get = new Get();
        $res = $get->http($url, '', false);
        $res = str_replace("var returnCitySN = ", "", $res);
        $res = substr($res, 0, -1);
        $res = json_decode($res, true);
        return $res;
    }
}
