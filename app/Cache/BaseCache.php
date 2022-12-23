<?php

namespace App\Cache;

use Illuminate\Support\Facades\Cache;


class BaseCache
{
    private const TTL = 864000;
    private $key;
    private $cache;


    public function __construct(string $key)
    {
        $this->key = $key;
        $this->cache = new Cache();
    }
    
    public function getTTL() {
        return self::TTL;
    }

    public function getKey() {
        return $this->key;
    }

    public function getCache() {
        return $this->cache;
    }

}
