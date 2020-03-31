<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

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
        $get = new Get();
        return $get->http($url, '', true);
    }
}
