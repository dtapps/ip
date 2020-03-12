<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace DtApp\Ip;


class IpIp extends Client
{
    public $reader = null;

    /**
     * IpIp constructor.
     * @param array $config
     * @throws \Exception
     */
    public function __construct(array $config = [])
    {
        $this->reader = new IpIpReader(__DIR__ . '/../database/ipipfree.ipdb');
        parent::__construct($config);
    }

    /**
     * @param $ip
     * @param $language
     * @return array|NULL
     */
    public function find($ip, $language)
    {
        return $this->reader->find($ip, $language);
    }

    /**
     * @param $ip
     * @param $language
     * @return array|false|null
     */
    public function findMap($ip, $language)
    {
        return $this->reader->findMap($ip, $language);
    }

    /**
     * @param $ip
     * @param $language
     * @return IpIpDistrictInfo|null
     */
    public function findInfo($ip, $language)
    {
        $map = $this->findMap($ip, $language);
        if (NULL === $map) return NUll;
        return new IpIpDistrictInfo($map);
    }
}
