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

use LiGuAngChUn\Curl\CurlException;

/**
 * 网易
 * Class NetEase
 * @package LiGuAngChUn\Ip
 */
class NetEase extends BasicIp
{
    /**
     * 网易IP查询接口
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function get()
    {
        $url = "https://ipservice.3g.163.com/ip";
        return $this->getHttp($url, '', true);
    }
}
