<?php

// +----------------------------------------------------------------------
// | IP数据库
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/DtApp/ip
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/DtApp/ip
// | github 仓库地址 ：https://github.com/GC0202/ip
// | Packagist 地址 ：https://packagist.org/packages/DtApp/ip
// +----------------------------------------------------------------------

use DtApp\Ip\Ali;
use DtApp\Ip\BaIdu;
use DtApp\Ip\BiliBili;
use DtApp\Ip\International;
use DtApp\Ip\Ip;
use DtApp\Ip\IpIp;
use DtApp\Ip\Lookup;
use DtApp\Ip\NetEase;
use DtApp\Ip\PConLine;
use DtApp\Ip\QqWry;
use DtApp\Ip\SiNa;
use DtApp\Ip\So;
use DtApp\Ip\SoHu;
use DtApp\Ip\TenCent;

require_once '../vendor/autoload.php';

$config = [
    'ali_gd_key' => '', // 阿里 请求服务权限标识 高德地图
    'bd_dt_key' => '', // 百度 开发者密钥 百度地图
    'tx_dt_key' => '', // 腾讯 开发密钥 腾讯地图
    'ali_appcode' => '', // 阿里 阿里云接口appcode
];

// 获取当前客户端IP地址
$ip = new Ip();
var_dump('客户端IP：', $ip->get());

// 高德地图
$ali = new Ali($config);
var_dump('高德地图：', $ali->getMap());
// 淘宝
var_dump('淘宝：', $ali->getTaoBao());
// 阿里云
var_dump("阿里云：", $ali->getCloud());

// 百度地图
$baidu = new BaIdu($config);
var_dump('百度地图：', $baidu->getMap());
// 百度搜索
var_dump('百度搜索：', $baidu->getSearch());

// 腾讯地图
$tencent = new TenCent($config);
var_dump('腾讯地图：', $tencent->getMap());

// 太平洋
$pconline = new PConLine();
var_dump('太平洋：', $pconline->get());

// 搜狐
$sohu = new SoHu();
var_dump('搜狐：', $sohu->get());

// 好搜
$so = new So();
var_dump('好搜：', $so->getOneBox());

// 新浪
$sina = new SiNa();
var_dump('新浪：', $sina->get());

// batch
$international = new International();
var_dump('batch：', $international->get());

// Lookup
$lookup = new Lookup();
var_dump('Lookup：', $lookup->get());

// qqWry
$qqwry = new QqWry();
var_dump('qqWry：', $qqwry->getLocation());

// ipIp
$ipip = new IpIp();
var_dump('ipip：', $ipip->getFind());
var_dump('ipip：', $ipip->getFindMap());
var_dump('ipip：', $ipip->getFindInfo());

// 网易
$netease = new NetEase();
var_dump('163：', $netease->get());

// 哔哩哔哩
$bilibili = new BiliBili();
var_dump('bilibili：', $bilibili->get());

