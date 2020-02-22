<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;

use DtApp\Curl\CurlException;

/**
 * 太平洋在线接口
 * Class PConLine
 * @package DtApp\Ip
 */
class PConLine extends Client
{
    /**
     * 太平洋接口
     * @var string
     */
    private $index_url = "http://whois.pconline.com.cn/ipJson.jsp";

    /**
     * 太平洋
     * @param string $ip IP地址
     * @return bool|false|mixed|string
     * @throws CurlException
     */
    protected function index($ip = '')
    {
        $url = $this->index_url . "?json=true";
        if (!empty($ip)) $url = $this->index_url . "?json=true&ip={$ip}";
        $curl = new \DtApp\Curl\Client();
        $res = $curl->getHttp($url, '', false);
        preg_match('/{.+}/', $res, $res);
        $res = iconv('gbk', 'utf-8', $res[0]);
        $res = json_decode($res, true);
        return $res;
    }
}
