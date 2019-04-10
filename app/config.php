<?php

$CONFIG = array(
  //|  DOMAINS
  'trusted_domains' =>
    array (
      'nextcloud.local',
      $_ENV['VIRTUAL_HOST'],
      '127.*.*.*'
    ),
  //|  DB
  'dbtype' => 'pgsql',
  'dbhost' => $_ENV['POSTGRES_HOST'],
  'dbname' => $_ENV['POSTGRES_DATABASE'],
  'dbuser' => $_ENV['POSTGRES_USER'],
  'dbpassword' => $_ENV['POSTGRES_PASSWORD'],
  //|  use token for clients
  'token_auth_enforced' => true,
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
  'objectstore' => [
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' => [
      'autocreate' => true,
      'bucket' => $_ENV['S3_BUCKET'],
      'key'    => $_ENV['S3_KEY'],
      'secret' => $_ENV['S3_SECRET'],
      'hostname' => $_ENV['S3_HOSTNAME'],
      'port' => $_ENV['S3_PORT'],
      'use_ssl' => true,
      'region' => $_ENV['S3_REGION'],
      'use_path_style'=>true
    ],
  ],
);