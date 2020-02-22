<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;

/**
 * 腾讯在线接口
 * Class TenCent
 * @package DtApp\Ip
 */
class TenCent
{
    /**
     * 高德地图接口
     * @var string
     */
    private $map_url = "https://apis.map.qq.com/ws/location/v1/ip";

    /**
     * 腾讯地图
     * https://lbs.qq.com/webservice_v1/guide-ip.html
     * @param string $key 开发密钥
     * @param string $ip IP地址，缺省时会使用请求端的IP
     * @param string $output 返回格式：支持JSON/JSONP，默认JSON
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    public function map($key = '', $ip = '', $output = 'JSON')
    {
        if (empty($key)) throw new IpException('开发密钥不能为空');
        $url = $this->map_url . "?key={$key}&output={$output}";
        if (!empty($ip)) $url = $this->map_url . "?key={$key}&ip={$ip}&output={$output}";
        $curl = new \DtApp\Curl\Client();
        return $curl->getHttp($url, '', true);
    }
}
