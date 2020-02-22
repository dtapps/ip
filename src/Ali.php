<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;

/**
 * 阿里在线接口
 * Class Ali
 * @package DtApp\Ip
 */
class Ali extends Client
{
    /**
     * 高德地图接口
     * @var string
     */
    private $map_url = "https://restapi.amap.com/v3/ip";

    /**
     * 淘宝接口
     * @var string
     */
    private $taobao_url = "http://ip.taobao.com/service/getIpInfo.php";

    /**
     * 高德地图
     * https://lbs.amap.com/api/webservice/guide/api/ipconfig
     * @param string $key 请求服务权限标识
     * @param string $ip 需要搜索的IP地址（仅支持国内）若用户不填写IP，则取客户http之中的请求来进行定位
     * @param string $output 可选值：JSON,XML 默认JSON
     * @return bool|mixed|string
     * @throws IpException
     * @throws CurlException
     */
    protected function map($key = '', $ip = '', $output = 'JSON')
    {
        if (empty($key)) throw new IpException('开发密钥不能为空');
        $url = $this->map_url . "?parameters&key={$key}&output={$output}";
        if (!empty($ip)) $url = $this->map_url . "?key={$key}&ip={$ip}&output={$output}";
        $curl = new \DtApp\Curl\Client();
        return $curl->getHttp($url, '', true);
    }

    /**
     * 淘宝
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    protected function taobao($ip = '')
    {
        if (empty($ip)) throw new IpException('IP地址不能为空');
        $url = $this->taobao_url . "?ip={$ip}";
        $curl = new \DtApp\Curl\Client();
        return $curl->getHttp($url, '', true);
    }
}
