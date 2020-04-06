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
 * 搜狐
 * Class SoHu
 * @package DtApp\Ip
 */
class SoHu extends BasicIp
{
    /**
     * 搜狐
     * @throws CurlException
     */
    public function get()
    {
        $url = "http://pv.sohu.com/cityjson?ie=utf-8";
        $res =  $this->getHttp($url, '', false);
        $res = str_replace("var returnCitySN = ", "", $res);
        $res = substr($res, 0, -1);
        $res = json_decode($res, true);
        return $res;
    }
}
