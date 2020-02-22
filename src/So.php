<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;

use DtApp\Curl\CurlException;

/**
 * 好搜在线接口
 * Class So
 * @package DtApp\Ip
 */
class So extends Client
{
    /**
     * 好搜接口
     * @var string
     */
    private $onebox_url = "https://open.onebox.so.com/dataApi";

    /**
     * 好搜
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws IpException
     * @throws CurlException
     */
    protected function onebox(string $ip = '')
    {
        if (empty($ip)) throw new IpException('IP地址不能为空');
        $url = $this->onebox_url . "?type=ip&src=onebox&tpl=0&num=1&query=ip&ip={$ip}&url=ip";
        $curl = new \DtApp\Curl\Client();
        return $curl->getHttp($url, '', true);
    }
}