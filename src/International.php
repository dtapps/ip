<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use DtApp\Curl\Client;
use DtApp\Curl\CurlException;

/**
 * 国际接口
 * Class International
 * @package DtApp\Ip
 */
class International extends BasicIp
{
    /**
     * batch
     * @param string $lang 语言
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function get(string $lang = 'zh-CN')
    {
        $url = "http://ip-api.com/json/?lang={$lang}";
        $curl = new Client();
        return $curl->getHttp($url, '', true);
    }
}
