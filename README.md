PHP 单例设计trait
===============

[![PHP Version](https://img.shields.io/badge/php-%3E%3D7.1-8892BF.svg)](http://www.php.net/)
[![Latest Stable Version](https://poser.pugx.org/itxq/singleton-pattern-php/version)](https://packagist.org/packages/itxq/singleton-pattern-php)
[![Total Downloads](https://poser.pugx.org/itxq/singleton-pattern-php/downloads)](https://packagist.org/packages/itxq/singleton-pattern-php)
[![Latest Unstable Version](https://poser.pugx.org/itxq/singleton-pattern-php/v/unstable)](//packagist.org/packages/itxq/singleton-pattern-php)
[![License](https://poser.pugx.org/itxq/singleton-pattern-php/license)](https://packagist.org/packages/itxq/singleton-pattern-php)
[![composer.lock available](https://poser.pugx.org/itxq/singleton-pattern-php/composerlock)](https://packagist.org/packages/itxq/singleton-pattern-php)

### 开源地址：

[【GitHub:】https://github.com/itxq/singleton-pattern-php](https://github.com/itxq/singleton-pattern-php)


### 扩展安装：

+ 方法一：composer命令 `composer require itxq/singleton-pattern-php`

+ 方法二：直接下载压缩包，然后进入项目中执行 composer命令 `composer update` 来生成自动加载文件

### 引用扩展：

+ 当你的项目不支持composer自动加载时，可以使用以下方式来引用该扩展包

```
// 引入扩展（具体路径请根据你的目录结构自行修改）
require_once __DIR__ . '/vendor/autoload.php';
```

### 使用示例：

```php
<?php

namespace test;

use itxq\traits\SingletonPattern;

class TestClass
{
    use SingletonPattern;

    public function test(): string
    {
        return '1008611';
    }
}
// 获取实例并传入配置
var_dump(TestClass::make(['b' => '123']));

// 传入配置
TestClass::make()->setConfig('a', 'ccc');

// 获取配置
var_dump(TestClass::make()->getConfig());

// 直接运行方法
var_dump(TestClass::make()->test());

```