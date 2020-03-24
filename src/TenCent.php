<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use DtApp\Curl\Client;
use DtApp\Curl\CurlException;

/**
 * 腾讯在线接口
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
     * @throws CurlException
     * @throws IpException
     */
    public function getMap(string $ip = '', string $output = 'JSON')
    {
        if (empty($this->config->get('txdt_key'))) throw new IpException('开发密钥不能为空');
        if (empty($ip)) $ip = $this->getIp();
        $url = "https://apis.map.qq.com/ws/location/v1/ip?key={$this->config->get('txdt_key')}&output={$output}";
        if (!empty($ip)) $url = "https://apis.map.qq.com/ws/location/v1/ip?key={$this->config->get('txdt_key')}&ip={$ip}&output={$output}";
        $curl = new Client();
        return $curl->getHttp($url, '', true);
    }
}
