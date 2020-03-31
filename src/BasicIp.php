<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Ip;

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
    const VERSION = '1.1.2';

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
}
