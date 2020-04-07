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

namespace DtApp\Ip;

use DtApp\Curl\CurlException;

/**
 * 新浪
 * Class SiNa
 * @package DtApp\Ip
 */
class SiNa extends BasicIp
{
    /**
     * 新浪
     * @param string $ip IP地址
     * @return bool|false|mixed|string|string[]
     * @throws CurlException
     */
    public function get(string $ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        $url = "http://ip.ws.126.net/ipquery?ip={$ip}";
        $res = $this->getHttp($url, '', false);
        $res = iconv('gbk', 'utf-8', $res);
        $res = substr($res, strpos($res, "{"));
        $res = substr($res, 0, -2);
        $res = str_replace("city", '"city"', $res);
        $res = str_replace("province", '"province"', $res);
        $res = json_decode($res, true);
        return $res;
    }
}
