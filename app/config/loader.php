<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
// $loader->registerDirs(
//     [
//         $config->application->controllersDir,
//         $config->application->modelsDir
//     ]
// )->register();

// $loader->registerNamespaces([
//     'App\Controllers'   => '../app/controllers/',
//     'App\librarys'      => '../app/library/',
//     'App\Models'        => '../app/models/'
// ])->register();

// $loader->registerNamespaces(array(
//   'Example\Base' => 'vendor/example/base/',
//   'Example\Adapter' => 'vendor/example/adapter/',
//   'Example' => 'vendor/example/'
// ));

 // $loader->register();

 $loader->registerNamespaces([
     'App\Controllers'   => '../app/controllers/',
     'App\librarys'      => '../app/library/',
     'App\Models'        => '../app/models/'
 ])->register();
