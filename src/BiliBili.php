<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;

class BiliBili extends Client
{
    /**
     * bilibili接口
     * @var string
     */
    private $index_url = "https://api.bilibili.com/x/web-interface/zone";

    /**
     * 哔哩哔哩ip查询接口
     * @return bool|mixed|string
     * @throws CurlException
     */
    protected function index()
    {
        $url = $this->index_url;
        $curl = new \DtApp\Curl\Client();
        return $curl->getHttp($url, '', true);
    }
}
