<?php
$CONFIG = array (
  'allow_local_remote_servers' => true,
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
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
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'fop-service-ncredis',
    'password' => '',
    'port' => 6379,
  ),
  'overwritehost' => 'cloud.dev.sonia.de',
  'overwriteprotocol' => 'https',
  'overwrite.cli.url' => 'https://cloud.dev.sonia.de',
  'upgrade.disable-web' => true,
  'passwordsalt' => '8BJyXk0p8cknu1/ejuNn1j4oETX9JB',
  'secret' => 'LpL/33cCyrWi7f1JBwoHlpWC5/RPCycLV4pvBBCJ2xIc9N7K',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'cloud.dev.sonia.de',
    2 => 'localhost',
    3 => 'nextcloud',
  ),
  'trusted_proxies' => 
  array (
    0 => '172.16.0.0/12',
    1 => '192.168.0.0/16',
  ),
  'forwarded_for_headers' => 
  array (
    0 => 'HTTP_X_FORWARDED_FOR',
  ),
  'trusted_header' => 'HTTP_X_FORWARDED_HOST',
  'maintenance_window_start' => 3,
  'maintenance_window' => 60,
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '31.0.9.1',
  'dbname' => 'nextcloud',
  'dbhost' => 'fop-service-ncdb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_admin',
  'dbpassword' => 'pRUp5Lm40vtzvxjF9YeAkk60GZn1kf',
  'installed' => true,
  'instanceid' => 'ocfjewvuzxuz',
  'maintenance' => false,
  'default_phone_region' => 'DE',
  'login_form_disabled' => true,
);
