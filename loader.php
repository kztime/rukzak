<?php
$vendorDir = ROOT_DIR . '/vendor';
$loader    = new \Phalcon\Loader();

$loader->registerNamespaces([
    'Phalcon'          => $vendorDir . '/phalcon/incubator/Library/Phalcon',
])->register();

return $loader;
