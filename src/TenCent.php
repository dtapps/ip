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
 * 腾讯
 * Class TenCent
 * @package DtApp\Ip
 */
class TenCent extends BasicIp
{
    /**
     * 腾讯地图
     * https://lbs.qq.com/webservice_v1/guide-ip.html
     * @param string $ip IP地址，缺省时会使用请求端的IP
     * @param string $output 返回格式：支持JSON/JSONP，默认JSON
     * @return bool|mixed|string
     * @throws IpException
     * @throws CurlException
     */
    public function getMap(string $ip = '', string $output = 'JSON')
    {
        if (empty($this->config->get('tx_dt_key'))) throw new IpException('开发密钥不能为空');
        if (empty($ip)) $ip = $this->getIp();
        $url = "https://apis.map.qq.com/ws/location/v1/ip?key={$this->config->get('tx_dt_key')}&output={$output}";
        if (!empty($ip)) $url = "https://apis.map.qq.com/ws/location/v1/ip?key={$this->config->get('tx_dt_key')}&ip={$ip}&output={$output}";
        return $this->getHttp($url, '', true);
    }
}
