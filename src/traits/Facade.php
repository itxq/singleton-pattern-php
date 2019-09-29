<?php
/**
 *  ==================================================================
 *        文 件 名: Facade.php
 *        概    要: Facade管理
 *        作    者: IT小强
 *        创建时间: 2019-09-29 11:59
 *        修改时间:
 *        copyright (c) 2016 - 2019 mail@xqitw.cn
 *  ==================================================================
 */

namespace itxq\traits;

/**
 * Facade管理
 * Trait Facade
 * @package itxq\traits
 */
trait Facade
{
    /**
     * @var array 实例
     */
    protected static $facadeInstances = [];

    /**
     * 获取实例
     * @param bool $force 是否强制重新实例化
     * @return mixed
     */
    public static function getFacadeInstances(bool $force = false)
    {
        $className = static::class;
        if ($force === true || !isset(self::$facadeInstances[$className]) || !self::$facadeInstances[$className] instanceof $className) {
            $instance                          = new $className();
            self::$facadeInstances[$className] = $instance;
        }
        return self::$facadeInstances[$className];
    }

    /**
     * 获取当前Facade对应类名
     * @return string
     */
    abstract protected static function getFacadeClass(): string;

    /**
     * 调用实际类中的发放
     * @param string $method 方法名
     * @param array  $params 参数
     * @return mixed
     */
    public static function __callStatic(string $method, array $params)
    {
        return call_user_func_array([static::getFacadeInstances(), $method], $params);
    }
}