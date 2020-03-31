<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * 好搜
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
        $get = new Get();
        return $get->http($url, '', true);
    }
}
