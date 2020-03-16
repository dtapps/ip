<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;

class NetEase extends Client
{
    /**
     * 163接口
     * @var string
     */
    private $index_url = "https://ipservice.3g.163.com/ip";

    /**
     * 网易IP查询接口
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
