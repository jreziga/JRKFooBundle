Getting started with JRKFooBundle
======================================

Setup
-----
JRKFooBundle requires [Foo](http://foo.fr)


- Using the vendors script

Add jrk/foo-bundle as a dependency in your project's composer.json file:

```
{
    "require": {
        "jrk/foo-bundle": "dev-master"
    }
}
```

Or add to your deps

```
[JRKFooBundle]
    git=git://github.com/jreziga/JRKFooBundle.git
    target=bundles/JRK/FooBundle
```

... and run php bin/vendors install

... and add the JRK namespace to autoloader

``` php
<?php
   // app/autoload.php
   $loader->registerNamespaces(array(
    // ...
    'JRK' => __DIR__.'/../vendor/bundles',
  ));
```

- Add JRKFooBundle to your application kernel

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new JRK\FooBundle\JRKFooBundle(),
    );
}
```
- Yml configuration

``` yml
# app/config/config.yml
jrk_foo:
    key: yourKey # Required
    login: yourLogin # Required
    useless: null
```

Usage
-----

 - Using service

Open your controller and call the service.

``` php
<?php
    $foo = $this->get('JRKFoo');
?>
```

Then you can use one of the methods of JRKFoo class

``` php
<?php
    $result = $foo->foo();
?>
```