<img align="right" width="100" src="https://cdn.oss.liguangchun.cn/04/999e9f2f06d396968eacc10ce9bc8a.png" alt="dtApp Logo"/>

<h1 align="left"><a href="https://www.liguangchun.cn/">IP数据库</a></h1>

📦 IP数据库 PHP扩展包

[![Latest Stable Version](https://poser.pugx.org/liguangchun/ip/v/stable)](https://packagist.org/packages/liguangchun/ip) 
[![Latest Unstable Version](https://poser.pugx.org/liguangchun/ip/v/unstable)](https://packagist.org/packages/liguangchun/ip) 
[![Total Downloads](https://poser.pugx.org/liguangchun/ip/downloads)](https://packagist.org/packages/liguangchun/ip) 
[![License](https://poser.pugx.org/liguangchun/ip/license)](https://packagist.org/packages/liguangchun/ip)

## 依赖环境

1. PHP7.0 版本及以上（低版本和7.4版本未做兼容处理！）

## 支持库
- 纯真数据库
- 高德地图
- 淘宝
- 百度搜索
- 腾讯地图
- 太平洋
- 搜狐
- 好搜
- 新浪
- IP Geolocation
- extreme-ip
- ipip

## 应用示例
- [数据应用](https://www.liguangchun.cn/ "数据应用")
- [数据分析](https://data.liguangchun.cn/ "数据分析")
- [数据工具](https://tool.liguangchun.cn/ "数据工具")
- [新型冠状病毒肺炎](https://data.liguangchun.cn/pneumonia/index.html "新型冠状病毒肺炎")
- [广东省建设项目数据](https://data.liguangchun.cn/gdbuild/index.html "广东省建设项目数据")

## 使用文档

[文档链接](https://apidoc.liguangchun.cn/web/#/8 "文档链接")

## 计划支持
- 纯真数据库运营商优化
- 获取省份、城市、地区信息列表

## 纯真数据库返回类型

``` json
{
	location_all: "广东省广州市",
	isp: {
		name: "广东互联网络交换中心(越秀区东风路305号)"
	},
	ip: {
		ipv4: "210.76.74.180",
		beginip: "210.76.64.0",
		endip: "210.76.95.255",
		trueip: 3528215220,
		ipv6: "0000:0000:0000:0000:0000:ffff:d24c:4ab4",
	},
	province: {
		name: "广东省",
		adcode: "440000",
		lat: 23.125178,
		lng: 113.280637,
	},
	city: {
		name: "广州市",
		adcode: "440100",
		lat: 23.125178,
		lng: 113.280637,
	},
	district: {
		name: "未知",
		adcode: "",
		lat: "",
		lng: "",
	},
}
```

## 安装

```text
composer require liguangchun/ip -vvv
```

## 更新

```text
composer update liguangchun/ip -vvv
```

## 删除

```text
composer remove liguangchun/ip -vvv
```
