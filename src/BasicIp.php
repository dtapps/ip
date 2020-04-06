<?php

// +----------------------------------------------------------------------
// | IP数据库
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/ip
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/ip
// | github 仓库地址 ：https://github.com/GC0202/ip
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/ip
// +----------------------------------------------------------------------

namespace LiGuAngChUn\Ip;

use LiGuAngChUn\Curl\CurlException;
use LiGuAngChUn\Curl\Get;

/**
 * 中间件
 * Class BasicIp
 * @package LiGuAngChUn\Ip
 */
class BasicIp
{
    /**
     * 定义当前版本
     */
    const VERSION = '1.1.3';

    /**
     * 配置
     * @var
     */
    public $config;

    /**
     * Base constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->config = new DataArray($options);
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
     * 网络请求
     * @param string $url
     * @param string $data
     * @param bool $is_json
     * @return bool|mixed|string
     * @throws CurlException
     */
    protected function getHttp(string $url = '', $data = '', bool $is_json = false)
    {
        return (new Get())->http($url, $data, $is_json);
    }
}
