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

/**
 * 客户端
 * Class Ip
 * @package LiGuAngChUn\Ip
 */
class Ip extends BasicIp
{
    /**
     * 获取当前客户端IP地址
     * @return mixed|string|null
     */
    public function get()
    {
        $ip = '0.0.0.0';
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //为了兼容百度的CDN，所以转成数组
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ip = $arr[0];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
