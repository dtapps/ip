<?php

// +----------------------------------------------------------------------
// | IP数据库
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/ip
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/ip
// | github 仓库地址 ：https://github.com/GC0202/ip
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/ip
// +----------------------------------------------------------------------

namespace LiGuAngChUn\Ip;

use LiGuAngChUn\Curl\CurlException;

/**
 * lookup
 * Class Lookup
 * @package DtApp\Ip
 */
class Lookup extends BasicIp
{
    /**
     * lookup
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function get()
    {
        $url = "https://extreme-ip-lookup.com/json/";
        return $this->getHttp($url, '', true);
    }
}
