<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;

/**
 * IP
 * Class Ip
 * @package DtApp\Ip
 */
class Ip extends Client
{
    /**
     * 获取当前客户端IP地址
     * @return mixed|string|null
     */
    protected function get()
    {
        static $ip = null;
        if ($ip !== null)
            return $ip;
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $pos = array_search('unknown', $arr);
            if (false !== $pos)
                unset($arr[$pos]);
            $ip = trim($arr[0]);
        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        if (isset($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        } else
            $ip = '0.0.0.0';
        if ($ip == '::1')  //localhost开启IPv6时的特殊分处理
            $ip = '127.0.0.1';
        // IP地址合法验证
        $long = sprintf("%u", ip2long($ip));
        $ip = $long ? $ip : '0.0.0.0';
        return $ip;
    }
}
