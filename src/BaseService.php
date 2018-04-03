<?php

namespace Holmang\Tradera;

use Holmang\Tradera\Exceptions\MissingCredentialsException;

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

        if (!isset($config['appId'])) {
            throw new MissingCredentialsException('appId is missing');
        }
        if (!isset($config['appKey'])) {
            throw new MissingCredentialsException('appKey is missing');
        }

    }

    protected function buildLocation()
    {
        return sprintf("%s?appId=%s&appKey=%s", $this->url, $this->config['appId'], $this->config['appKey']);
    }
}