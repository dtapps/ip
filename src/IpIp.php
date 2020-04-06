<?php

namespace DtApp\Ip;

use Exception;

class IpIp extends BasicIp
{
    public $reader = null;

    /**
     * IpIp constructor.
     * @param array $config
     * @throws Exception
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
    public function getFind(string $ip = '', string $language = 'CN')
    {
        if (empty($ip)) $ip = $this->getIp();
        return $this->reader->find($ip, $language);
    }

    /**
     * @param $ip
     * @param $language
     * @return array|false|null
     */
    public function getFindMap(string $ip = '', string $language = 'CN')
    {
        if (empty($ip)) $ip = $this->getIp();
        return $this->reader->findMap($ip, $language);
    }

    /**
     * @param $ip
     * @param $language
     * @return IpIpDistrictInfo|null
     */
    public function getFindInfo(string $ip = '', string $language = 'CN')
    {
        if (empty($ip)) $ip = $this->getIp();
        $map = $this->getFindMap($ip, $language);
        if (NULL === $map) return NUll;
        return new IpIpDistrictInfo($map);
    }
}
