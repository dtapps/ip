<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use DtApp\Curl\Client;
use DtApp\Curl\CurlException;

/**
 * 阿里在线接口
 * Class Ali
 * @package DtApp\Ip
 */
class Ali extends BasicIp
{
    /**
     * 高德地图
     * https://lbs.amap.com/api/webservice/guide/api/ipconfig
     * @param string $ip 需要搜索的IP地址（仅支持国内）若用户不填写IP，则取客户http之中的请求来进行定位
     * @param string $output 可选值：JSON,XML 默认JSON
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    public function getMap(string $ip = '', string $output = 'JSON')
    {
        if (empty($this->config->get('gddt_key'))) throw new IpException('开发密钥不能为空');
        if (empty($ip)) $ip = $this->getIp();
        $url = "https://restapi.amap.com/v3/ip?parameters&key={$this->config->get('gddt_key')}&output={$output}";
        if (!empty($ip)) $url = "https://restapi.amap.com/v3/ip?key={$this->config->get('gddt_key')}&ip={$ip}&output={$output}";
        $curl = new Client();
        return $curl->getHttp($url, '', true);
    }

    /**
     * 淘宝
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function getTaoBao(string $ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        $url = "http://ip.taobao.com/service/getIpInfo.php?ip={$ip}";
        $curl = new Client();
        return $curl->getHttp($url, '', true);
    }
}
