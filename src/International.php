<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;

/**
 * 国际接口
 * Class International
 * @package DtApp\Ip
 */
class International
{
    /**
     * batch接口
     * @var string
     */
    private $index_url = "http://ip-api.com/json/";

    /**
     * batch
     * @param string $lang 语言
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function onebox($lang = 'zh-CN')
    {
        $url = $this->index_url . "?lang={$lang}";
        $curl = new \DtApp\Curl\Client();
        return $curl->getHttp($url, '', true);
    }
}
