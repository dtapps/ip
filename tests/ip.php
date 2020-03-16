<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

use DtApp\Ip\Client;

require_once '../vendor/autoload.php';

$ip = new Client([
    'gddt_key' => '',
    'bddt_ak' => '',
    'txdt_key' => '',
]);
// 获取当前客户端IP地址
var_dump('客户端IP：', $ip->getIp());
// 高德地图
var_dump('高德地图：', $ip->aliMapOnline());
// 淘宝
var_dump('淘宝：', $ip->aliTaoBaoOnline());
// 百度地图
var_dump('百度地图：', $ip->baIduMapOnline());
// 百度搜索
var_dump('百度搜索：', $ip->baIduSearchOnline());
// 腾讯地图
var_dump('腾讯地图：', $ip->tenCentMapOnline());
// 太平洋
var_dump('太平洋：', $ip->pConLineIpOnline());
// 搜狐
var_dump('搜狐：', $ip->soHuIpOnline());
// 好搜
var_dump('好搜：', $ip->soOneBoxOnline());
// 新浪
var_dump('新浪：', $ip->siNaQueryOnline());
// batch
var_dump('batch：', $ip->internationalIpOnline());
// Lookup
var_dump('Lookup：', $ip->lookupIpOnline());
// qqWry
var_dump('qqWry：', $ip->qqWryGetLocation());
// ipIp
var_dump('ipip：', $ip->ipIpFind());
var_dump('ipip：', $ip->ipIpFindMap());
var_dump('ipip：', $ip->ipIpFindInfo());
// 网易
var_dump('163：', $ip->netEaseIpOnline());
// 哔哩哔哩
var_dump('bilibili：', $ip->biliBiliIpOnline());

