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
 * 太平洋
 * Class PConLine
 * @package DtApp\Ip
 */
class PConLine extends BasicIp
{
    /**
     * 太平洋
     * @param string $ip IP地址
     * @return bool|false|mixed|string
     * @throws CurlException
     */
    public function get(string $ip = '')
    {
        $url = "http://whois.pconline.com.cn/ipJson.jsp?json=true";
        if (!empty($ip)) $url = "http://whois.pconline.com.cn/ipJson.jsp?json=true&ip={$ip}";
        $res = $this->getHttp($url, '', false);
        preg_match('/{.+}/', $res, $res);
        $res = iconv('gbk', 'utf-8', $res[0]);
        $res = json_decode($res, true);
        return $res;
    }
}
