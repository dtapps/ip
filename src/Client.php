<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


use DtApp\Curl\CurlException;
use Exception;

class Client
{
    /**
     * 请求服务权限标识
     * @var mixed|string
     */
    private $gddt_key = '';

    /**
     *  开发者密钥
     * @var mixed|string
     */
    private $bddt_ak = '';

    /**
     *  开发密钥
     * @var mixed|string
     */
    private $txdt_key = '';

    public function __construct(array $config = [])
    {
        if (!empty($config['gddt_key'])) $this->gddt_key = $config['gddt_key'];
        if (!empty($config['bddt_ak'])) $this->bddt_ak = $config['bddt_ak'];
        if (!empty($config['txdt_key'])) $this->txdt_key = $config['txdt_key'];
    }

    /**
     * 获取当前客户端IP地址
     * @return mixed|string|null
     */
    public function getIp()
    {
        return (new Ip())->get();
    }

    /**
     * 在线-阿里-高德地图
     * @param string $ip 需要搜索的IP地址（仅支持国内）若用户不填写IP，则取客户http之中的请求来进行定位
     * @return bool|mixed|string
     * @throws IpException
     * @throws CurlException
     */
    public function aliMapOnline($ip = '')
    {
        return (new Ali())->map($this->gddt_key, $ip);
    }

    /**
     * 在线-阿里-淘宝
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    public function aliTaoBaoOnline($ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        return (new Ali())->taobao($ip);
    }

    /**
     * 在线-百度-百度地图
     * @param string $ip 用户上网的IP地址，参数如果不出现或为空，会针对发来请求的IP进行定位
     * @param string $coor 经纬度的坐标类型  coor = bd09ll：百度经纬度坐标，在国测局坐标基础之上二次加密而来、coor = gcj02：国测局02坐标，在原始GPS坐标基础上，按照国家测绘行业统一要求，加密后的坐标
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    public function baIduMapOnline($ip = '', $coor = 'bd09ll')
    {
        return (new BaIdu())->map($this->bddt_ak, $ip, $coor);
    }

    /**
     * 在线-百度-百度搜索
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    public function baIduSearchOnline($ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        return (new BaIdu())->search($ip);
    }

    /**
     * 在线-腾讯-腾讯地图
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    public function tenCentMapOnline($ip = '')
    {
        return (new TenCent())->map($this->txdt_key, $ip);
    }

    /**
     * 在线-太平洋
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function pConLineIpOnline($ip = '')
    {
        return (new PConLine())->index($ip);
    }

    /**
     * 在线-搜狐
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function soHuIpOnline()
    {
        return (new SoHu())->index();
    }

    /**
     * 在线-好搜
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    public function soOneBoxOnline($ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        return (new So())->onebox($ip);
    }

    /**
     * 在线-新浪
     * @param string $ip IP地址
     * @return bool|mixed|string
     * @throws CurlException
     * @throws IpException
     */
    public function siNaQueryOnline($ip = '')
    {
        if (empty($ip)) $ip = $this->getIp();
        return (new SiNa())->query($ip);
    }

    /**
     * 在线-batch
     * @param string $lang 语言
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function internationalIpOnline($lang = 'zh-CN')
    {
        return (new International())->index($lang);
    }

    /**
     * 在线-Lookup
     * @return bool|mixed|string
     * @throws CurlException
     */
    public function lookupIpOnline()
    {
        return (new Lookup())->index();
    }

    /**
     * QqWry-设置未知的返回字段
     * @param string $unknown
     * @return QqWry
     */
    private function qqWrySetUnknown($unknown = '未知')
    {
        return (new QqWry())->setUnknown($unknown);
    }

    /**
     * QqWry-获取省信息
     * @param string $ip
     * @return QqWry
     * @throws IpException
     */
    private function qqWryGetProvince($ip = '')
    {
        return (new QqWry())->getProvince($ip);
    }

    /**
     * QqWry-获取城市信息
     * @param string $ip
     * @return QqWry
     * @throws IpException
     */
    private function qqWryGetCity($ip = '')
    {
        return (new QqWry())->getCity($ip);
    }

    /**
     * QqWry-获取地区信息
     * @param string $ip
     * @return QqWry
     * @throws IpException
     */
    private function qqWryGetArea($ip = '')
    {
        return (new QqWry())->getArea($ip);
    }

    /**
     * QqWry-获取运营商信息
     * @param string $ip
     * @return QqWry
     * @throws IpException
     */
    private function qqWryGetExtend($ip = '')
    {
        return (new QqWry())->getExtend($ip);
    }

    /**
     * QqWry-根据所给 IP 地址或域名返回所在地区信息
     * @param string $ip
     * @return QqWry
     * @throws IpException
     */
    public function qqWryGetLocation($ip = '')
    {
        return (new QqWry())->getLocation($ip);
    }

    /**
     * ipip
     * @param string $ip
     * @param string $language
     * @return array|NULL
     * @throws Exception
     */
    public function ipIpFind($ip = '', $language = 'CN')
    {
        if (empty($ip)) $ip = (new Ip())->get();
        return (new IpIp())->find($ip, $language);
    }

    /**
     * ipip
     * @param string $ip
     * @param string $language
     * @return array|false|null
     * @throws Exception
     */
    public function ipIpFindMap($ip = '', $language = 'CN')
    {
        if (empty($ip)) $ip = (new Ip())->get();
        return (new IpIp())->findMap($ip, $language);
    }

    /**
     * ipip
     * @param string $ip
     * @param string $language
     * @return IpIpDistrictInfo|null
     * @throws Exception
     */
    public function ipIpFindInfo($ip = '', $language = 'CN')
    {
        if (empty($ip)) $ip = (new Ip())->get();
        return (new IpIp())->findInfo($ip, $language);
    }
}
