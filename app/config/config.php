<?php

$CONFIG = array(
  //|  proxy settings
  'trusted_proxies' => explode(' ',$_ENV['NEXTCLOUD_TRUSTED_PROXIES']),
  //'overwritehost' => $_ENV['VIRTUAL_HOST'],
  //'overwriteprotocol' => 'https',
  //'overwrite.cli.url' => 'https://' . $_ENV['VIRTUAL_HOST'] . '/',
  //'htaccess.RewriteBase' => '/',
  //|  APPS
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  //|  STORE
  'objectstore' =>
  array (
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' =>
    array (
      'autocreate' => false,
      'bucket' => $_ENV['S3_BUCKET'],
      'key'    => $_ENV['S3_KEY'],
      'secret' => $_ENV['S3_SECRET'],
      'hostname' => $_ENV['S3_HOSTNAME'],
      'use_ssl' => true,
      'region' => $_ENV['S3_REGION'],
    ),
  ),
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'passwordsalt' => $_ENV['MEMCACHE_SALT'],
  'secret' => $_ENV['MEMCACHE_SECRET'],
  'trusted_domains' => explode(' ',$_ENV['NEXTCLOUD_TRUSTED_DOMAINS']),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => $_ENV['POSTGRES_DB'],
  'dbhost' => $_ENV['POSTGRES_HOST'],
  'dbport' => '',
  'dbtableprefix' => $_ENV['NEXTCLOUD_TABLE_PREFIX'],
  'dbuser' => $_ENV['POSTGRES_USER'],
  'dbpassword' => $_ENV['POSTGRES_PASSWORD'],
  'installed' => true,
  'instanceid' => $_ENV['NEXTCLOUD_INSTANCE_ID'],
  'maintenance' => false,
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_smtpsecure' => 'ssl',
  'mail_from_address' => 'robot',
  'mail_domain' => $_ENV['MAIL_DOMAIN'],
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => 1,
  'mail_smtphost' => $_ENV['SMTP_HOST'],
  'mail_smtpport' => $_ENV['SMTP_PORT'],
  'mail_smtpname' => $_ENV['SMTP_NAME'],
  'mail_smtppassword' => $_ENV['SMTP_PASSWORD'],
);
