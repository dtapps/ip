<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;

/**
 * 百度在线接口
 * Class BaIdu
 * @package DtApp\Ip
 */
class BaIdu extends Client
{
    /**
     * 百度地图接口
     * @var string
     */
    private $map_url = "https://api.map.baidu.com/location/ip";

    /**
     * 百度搜索接口
     * @var string
     */
    private $search_url = "https://sp0.baidu.com/8aQDcjqpAAV3otqbppnN2DJv/api.php";

    /**
     * 百度地图
     * http://lbsyun.baidu.com/index.php?title=webapi/ip-api
     * @param string $ak 开发者密钥
     * @param string $ip 用户上网的IP地址，参数如果不出现或为空，会针对发来请求的IP进行定位
     * @param string $coor 经纬度的坐标类型  coor = bd09ll：百度经纬度坐标，在国测局坐标基础之上二次加密而来、coor = gcj02：国测局02坐标，在原始GPS坐标基础上，按照国家测绘行业统一要求，加密后的坐标
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    protected function map($ak = '', $ip = '', $coor = 'bd09ll')
    {
        if (empty($ak)) throw new IpException('开发者密钥不能为空');
        $url = $this->map_url . "?ak={$ak}&coor={$coor}";
        if (!empty($ip)) $url = $this->map_url . "?ak={$ak}&ip={$ip}&coor={$coor}";
        $curl = new \DtApp\Curl\Client();
        return $curl->getHttp($url, '', true);
    }

    /**
     * 百度搜索
     * @param string $ip IP地址
     * @return bool|false|mixed|string|string[]
     * @throws IpException
     * @throws CurlException
     */
    protected function search(string $ip)
    {
        if (empty($ip)) throw new IpException('IP地址不能为空');
        $url = $this->search_url . "?query={$ip}&co=&resource_id=6006&ie=utf8&oe=utf8&cb=json";
        $curl = new \DtApp\Curl\Client();
        $res = $curl->getHttp($url, '', false);
        $res = str_replace("/**/json", "", $res);
        $res = substr($res, 1);
        $res = substr($res, 0, -2);
        $res = json_decode($res, true);
        return $res;
    }
}
