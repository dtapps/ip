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
 * 国际接口
 * Class International
 * @package DtApp\Ip
 */
class International extends BasicIp
{
    /**
     * batch
     * @param string $lang 语言
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function get(string $lang = 'zh-CN')
    {
        $url = "http://ip-api.com/json/?lang={$lang}";
        return $this->getHttp($url, '', true);
    }
}
