<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;


use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * 阿里
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
     * @throws IpException
     * @throws CurlException
     */
    public function getMap(string $ip = '', string $output = 'JSON')
    {
        if (empty($this->config->get('ali_gd_key'))) throw new IpException('开发密钥不能为空');
        if (empty($ip)) $ip = $this->getIp();
        $url = "https://restapi.amap.com/v3/ip?parameters&key={$this->config->get('ali_gd_key')}&output={$output}";
        if (!empty($ip)) $url = "https://restapi.amap.com/v3/ip?key={$this->config->get('ali_gd_key')}&ip={$ip}&output={$output}";
        $get = new Get();
        return $get->http($url, '', true);
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
        $get = new Get();
        return $get->http($url, '', true);
    }

    /**
     * 阿里云
     * @param string $ip
     * @return bool|mixed|string
     * @throws IpException
     */
    public function getCloud(string $ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        $host = "http://iploc.market.alicloudapi.com";
        $path = "/v3/ip";
        $method = "GET";
        $appcode = $this->config->get('ali_appcode');
        if (empty($appcode)) throw new IpException('请检查阿里-阿里云配置信息 appcode');
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "ip={$ip}";
        $bodys = "";
        $url = $host . $path . "?" . $querys;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        if (1 == strpos("$" . $host, "https://")) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        $content = curl_exec($curl);
        curl_close($curl);
        return json_decode($content, true);
    }
}
