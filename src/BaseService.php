<?php

namespace Holmang\Tradera;

class BaseService
{
    protected $url;

    /**
     * @var array
     */
    protected $config;

    public function __construct($url, array $config)
    {
        $this->url = $url;
        $this->config = $config;
    }

    protected function buildLocation()
    {
        return sprintf("%s?appId=%s&appKey=%s", $this->url, $this->config['appId'], $this->config['appKey']);
    }
}