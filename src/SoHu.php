<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;

use DtApp\Curl\CurlException;

/**
 * 搜狐在线接口
 * Class SoHu
 * @package DtApp\Ip
 */
class SoHu
{
    /**
     * 搜狐接口
     * @var string
     */
    private $index_url = "http://pv.sohu.com/cityjson";


    /**
     * 搜狐
     * @throws CurlException
     */
    public function index()
    {
        $url = $this->index_url . "?ie=utf-8";
        $curl = new \DtApp\Curl\Client();
        $res = $curl->getHttp($url, '', false);
        $res = str_replace("var returnCitySN = ", "", $res);
        $res = substr($res, 0, -1);
        $res = json_decode($res, true);
        return $res;
    }
}
