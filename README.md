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
- [数据分析](https://data.liguangchun.cn/ "数据分析")
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
  ["location_all"]=>
  string(18) "广东省深圳市"
  ["isp"]=>
  array(1) {
    ["name"]=>
    string(6) "电信"
  }
  ["ip"]=>
  array(5) {
    ["ipv4"]=>
    string(13) "xx.xxx.xx.230"
    ["beginip"]=>
    string(12) "xx.xxx.xxx.0"
    ["endip"]=>
    string(13) "xx.xxx.xx.255"
    ["trueip"]=>
    int(245043686)
    ["ipv6"]=>
    string(39) "0000:0000:0000:0000:0000:xxxx:xxxx:xxxx"
  }
  ["province"]=>
  array(4) {
    ["name"]=>
    string(9) "广东省"
    ["adcode"]=>
    string(6) "440000"
    ["lat"]=>
    float(23.125178)
    ["lng"]=>
    float(113.280637)
  }
  ["city"]=>
  array(4) {
    ["name"]=>
    string(9) "深圳市"
    ["adcode"]=>
    string(6) "440300"
    ["lat"]=>
    float(22.547)
    ["lng"]=>
    float(114.085947)
  }
  ["district"]=>
  array(4) {
    ["name"]=>
    string(6) "未知"
    ["adcode"]=>
    string(0) ""
    ["lat"]=>
    string(0) ""
    ["lng"]=>
    string(0) ""
  }
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
