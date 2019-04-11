<?php

$CONFIG = array(
  //|  proxy settings
  //'overwriteprotocol' => 'https',
  //'overwrite.cli.url' => 'https://' . $_ENV['VIRTUAL_HOST'] . '/',
  //'htaccess.RewriteBase' => '/',
  //|  APPS
  'apps_paths' => array(
    array(
      'path'=> '/usr/src/nextcloud/apps',
      'url' => '/apps',
      'writable' => true,
    ),
    array(
      'path'=> '/usr/src/nextcloud/cutom_apps',
      'url' => '/custom_apps',
      'writable' => false,
    ),
  ),
  //|  STORE
  'objectstore' => array(
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' => array(
      'autocreate' => true,
      'bucket' => $_ENV['S3_BUCKET'],
      'key'    => $_ENV['S3_KEY'],
      'secret' => $_ENV['S3_SECRET'],
      'hostname' => $_ENV['S3_HOSTNAME'],
      'port' => $_ENV['S3_PORT'],
      'use_ssl' => true,
      'region' => $_ENV['S3_REGION'],
      'use_path_style'=>true
    ),
  ),
);
