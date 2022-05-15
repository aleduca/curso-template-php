<?php
namespace app\framework\classes;

class Cache
{
    private const CACHE_PREFIX = 'cache_';

    public static function path(string $cacheName)
    {
        $path = dirname(__FILE__, 2)."/resources/storage/cache";
        $cacheName = self::CACHE_PREFIX.$cacheName;

        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        return "{$path}/{$cacheName}.txt";
    }

    public static function get(string $cacheName, callable $callback, int $expiration)
    {
        $cachePath = self::path($cacheName);
        if (!file_exists($cachePath) || strtotime("+{$expiration} minutes", filemtime($cachePath)) < strtotime('now')) {
            file_put_contents($cachePath, json_encode($callback()));
            return $callback();
        }
        
        return (array)json_decode(file_get_contents($cachePath));
    }
}
