<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

use DtApp\Curl\Client;
use DtApp\Curl\CurlException;

/**
 * 好搜在线接口
 * Class So
 * @package DtApp\Ip
 */
class So extends BasicIp
{
    /**
     * 好搜
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function getOneBox(string $ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        $url = "https://open.onebox.so.com/dataApi?type=ip&src=onebox&tpl=0&num=1&query=ip&ip={$ip}&url=ip";
        $curl = new Client();
        return $curl->getHttp($url, '', true);
    }
}
