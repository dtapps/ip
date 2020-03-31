<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

require_once '../vendor/autoload.php';

$config = [
    'gddt_key' => '', // 请求服务权限标识 高德地图
    'bddt_ak' => '', // 开发者密钥 百度地图
    'txdt_key' => '', // 开发密钥 腾讯地图
    'ali_appcode' => '0ff6209a6a994219a4ec1c02f99d7796', // 阿里-阿里云接口appcode
];

// 获取当前客户端IP地址
$ip = new LiGuAngChUn\Ip\Ip();
var_dump('客户端IP：', $ip->get());

// 高德地图
$ali = new LiGuAngChUn\Ip\Ali($config);
var_dump('高德地图：', $ali->getMap());
// 淘宝
var_dump('淘宝：', $ali->getTaoBao());
// 阿里云
var_dump("阿里云：", $ali->getCloud());

// 百度地图
$baidu = new LiGuAngChUn\Ip\BaIdu($config);
var_dump('百度地图：', $baidu->getMap());
// 百度搜索
var_dump('百度搜索：', $baidu->getSearch());

// 腾讯地图
$tencent = new LiGuAngChUn\Ip\TenCent($config);
var_dump('腾讯地图：', $tencent->getMap());

// 太平洋
$pconline = new LiGuAngChUn\Ip\PConLine();
var_dump('太平洋：', $pconline->get());

// 搜狐
$sohu = new LiGuAngChUn\Ip\SoHu();
var_dump('搜狐：', $sohu->get());

// 好搜
$so = new LiGuAngChUn\Ip\So();
var_dump('好搜：', $so->getOneBox());

// 新浪
$sina = new LiGuAngChUn\Ip\SiNa();
var_dump('新浪：', $sina->get());

// batch
$international = new LiGuAngChUn\Ip\International();
var_dump('batch：', $international->get());

// Lookup
$lookup = new LiGuAngChUn\Ip\Lookup();
var_dump('Lookup：', $lookup->get());

// qqWry
$qqwry = new LiGuAngChUn\Ip\QqWry();
var_dump('qqWry：', $qqwry->getLocation());

// ipIp
$ipip = new LiGuAngChUn\Ip\IpIp();
var_dump('ipip：', $ipip->getFind());
var_dump('ipip：', $ipip->getFindMap());
var_dump('ipip：', $ipip->getFindInfo());

// 网易
$netease = new LiGuAngChUn\Ip\NetEase();
var_dump('163：', $netease->get());

// 哔哩哔哩
$bilibili = new LiGuAngChUn\Ip\BiliBili();
var_dump('bilibili：', $bilibili->get());

