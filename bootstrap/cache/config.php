<?php return array (
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'MTDb',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'MTDb',
        'username' => 'root',
        'password' => 'root',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => NULL,
        'strict' => false,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'MTDb',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'MTDb',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/architect-v2/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/architect-v2/public/storage',
        'url' => 'http://ccbizon.com:8081/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/var/www/architect-v2/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/architect-v2/resources/views',
    ),
    'compiled' => '/var/www/architect-v2/storage/framework/views',
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'sentry' => 
  array (
    'dsn' => NULL,
    'breadcrumbs.sql_bindings' => true,
    'user_context' => true,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/architect-v2/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel',
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mailtrap.io',
    'port' => '2525',
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'encryption' => NULL,
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/architect-v2/resources/views/vendor/mail',
      ),
    ),
  ),
  'app' => 
  array (
    'name' => 'Architect',
    'env' => 'production',
    'debug' => true,
    'url' => 'http://ccbizon.com:8081',
    'timezone' => 'UTC',
    'locale' => 'english',
    'fallback_locale' => NULL,
    'key' => 'base64:1HGTix4zjHz7z3SGzpUOwJupamW2OhRSBMRf1C0/al0=',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'log_level' => 'debug',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Laravel\\Tinker\\TinkerServiceProvider',
      23 => 'Chumper\\Zipper\\ZipperServiceProvider',
      24 => 'Vebto\\VebtoServiceProvider',
      25 => 'Sentry\\SentryLaravel\\SentryLaravelServiceProvider',
      26 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
      27 => 'Sentry\\SentryLaravel\\SentryLaravelServiceProvider',
      28 => 'App\\Providers\\AppServiceProvider',
      29 => 'App\\Providers\\AuthServiceProvider',
      30 => 'App\\Providers\\EventServiceProvider',
      31 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Zipper' => 'Chumper\\Zipper\\Zipper',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
      'Sentry' => 'Sentry\\SentryLaravel\\SentryFacade',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => 'http://ccbizon.com:8081/secure/auth/social/google/callback',
    ),
    'twitter' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => 'http://ccbizon.com:8081/secure/auth/social/twitter/callback',
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => 'http://ccbizon.com:8081/secure/auth/social/facebook/callback',
    ),
    'paypal' => 
    array (
      'client_id' => NULL,
      'secret' => NULL,
      'webhook_id' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
  ),
  'ide-helper' => 
  array (
    'filename' => '_ide_helper',
    'format' => 'php',
    'include_fluent' => false,
    'write_model_magic_where' => true,
    'include_helpers' => false,
    'helper_files' => 
    array (
      0 => '/var/www/architect-v2/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),
    'model_locations' => 
    array (
      0 => 'app',
    ),
    'extra' => 
    array (
      'Eloquent' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'Illuminate\\Database\\Query\\Builder',
      ),
      'Session' => 
      array (
        0 => 'Illuminate\\Session\\Store',
      ),
    ),
    'magic' => 
    array (
      'Log' => 
      array (
        'debug' => 'Monolog\\Logger::addDebug',
        'info' => 'Monolog\\Logger::addInfo',
        'notice' => 'Monolog\\Logger::addNotice',
        'warning' => 'Monolog\\Logger::addWarning',
        'error' => 'Monolog\\Logger::addError',
        'critical' => 'Monolog\\Logger::addCritical',
        'alert' => 'Monolog\\Logger::addAlert',
        'emergency' => 'Monolog\\Logger::addEmergency',
      ),
    ),
    'interfaces' => 
    array (
    ),
    'custom_db_types' => 
    array (
    ),
    'model_camel_case_properties' => false,
    'type_overrides' => 
    array (
      'integer' => 'int',
      'boolean' => 'bool',
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => 
    array (
      0 => '192.168.1.10',
    ),
    'headers' => 
    array (
      1 => 'FORWARDED',
      2 => 'X_FORWARDED_FOR',
      4 => 'X_FORWARDED_HOST',
      8 => 'X_FORWARDED_PROTO',
      16 => 'X_FORWARDED_PORT',
    ),
  ),
  'vebto' => 
  array (
    'default-settings' => 
    array (
      0 => 
      array (
        'name' => 'dates.format',
        'value' => 'yyyy-MM-dd',
      ),
      1 => 
      array (
        'name' => 'dates.locale',
        'value' => 'en_US',
      ),
      2 => 
      array (
        'name' => 'social.google.enable',
        'value' => 1,
      ),
      3 => 
      array (
        'name' => 'social.twitter.enable',
        'value' => 1,
      ),
      4 => 
      array (
        'name' => 'social.facebook.enable',
        'value' => 1,
      ),
      5 => 
      array (
        'name' => 'realtime.enable',
        'value' => 0,
      ),
      6 => 
      array (
        'name' => 'registration.disable',
        'value' => 0,
      ),
      7 => 
      array (
        'name' => 'cache.report_minutes',
        'value' => 60,
      ),
      8 => 
      array (
        'name' => 'branding.use_custom_theme',
        'value' => 0,
      ),
      9 => 
      array (
        'name' => 'branding.favicon',
        'value' => 'favicon.ico',
      ),
      10 => 
      array (
        'name' => 'branding.logo_dark',
        'value' => 'client/assets/images/logo-dark.png',
      ),
      11 => 
      array (
        'name' => 'branding.logo_light',
        'value' => 'client/assets/images/logo-light.png',
      ),
      12 => 
      array (
        'name' => 'i18n.default_localization',
        'value' => 'english',
      ),
      13 => 
      array (
        'name' => 'i18n.enable',
        'value' => 1,
      ),
      14 => 
      array (
        'name' => 'logging.sentry_public',
        'value' => NULL,
      ),
      15 => 
      array (
        'name' => 'realtime.pusher_key',
        'value' => NULL,
      ),
      17 => 
      array (
        'name' => 'homepage.type',
        'value' => 'default',
      ),
      18 => 
      array (
        'name' => 'billing.enable',
        'value' => false,
      ),
      19 => 
      array (
        'name' => 'billing.paypal_test_mode',
        'value' => true,
      ),
      20 => 
      array (
        'name' => 'billing.stripe_test_mode',
        'value' => true,
      ),
      21 => 
      array (
        'name' => 'billing.stripe.enable',
        'value' => false,
      ),
      22 => 
      array (
        'name' => 'billing.paypal.enable',
        'value' => false,
      ),
      23 => 
      array (
        'name' => 'billing.accepted_cards',
        'value' => '["visa","mastercard","american-express","discover"]',
      ),
      24 => 
      array (
        'name' => 'seo.home_title',
        'value' => 'Architect - Html & Site Builder.',
      ),
      25 => 
      array (
        'name' => 'seo.home_description',
        'value' => 'Create a free website with Architect. Customize with a free website builder, no coding skills needed. Choose a design, begin customizing and be online today!',
      ),
      26 => 
      array (
        'name' => 'menus',
        'value' => '[{"position":"dashboard","name":"Dashboard","items":[{"type":"route","order":1,"condition":"admin","position":0,"label":"Admin Area","action":"admin"}]}]',
      ),
      27 => 
      array (
        'name' => 'branding.site_name',
        'value' => 'Architect',
      ),
      28 => 
      array (
        'name' => 'builder.routing_type',
        'value' => 'regular',
      ),
      29 => 
      array (
        'name' => 'builder.googgle_fonts_api_key',
        'value' => 'AIzaSyDhc_8NKxXjtv69htFcUPe6A7oGSQ4om2o',
      ),
      30 => 
      array (
        'name' => 'builder.template_categories',
        'value' => '["Landing Page","Blog","Portfolio"]',
      ),
    ),
    'demo-blocked-routes' => 
    array (
      0 => 
      array (
        'method' => 'POST',
        'name' => 'settings',
      ),
      1 => 
      array (
        'method' => 'POST',
        'name' => 'admin/appearance',
      ),
      2 => 
      array (
        'method' => 'PUT',
        'name' => 'mail-templates/{id}',
      ),
      3 => 
      array (
        'method' => 'POST',
        'name' => 'cache/clear',
      ),
      4 => 
      array (
        'method' => 'DELETE',
        'name' => 'localizations/{id}',
      ),
      5 => 
      array (
        'method' => 'PUT',
        'name' => 'localizations/{id}',
      ),
      6 => 
      array (
        'method' => 'POST',
        'name' => 'localizations',
      ),
      7 => 
      array (
        'method' => 'DELETE',
        'name' => 'pages',
      ),
      8 => 
      array (
        'method' => 'POST',
        'name' => 'billing/plans',
      ),
      9 => 
      array (
        'method' => 'POST',
        'name' => 'billing/plans/sync',
      ),
      10 => 
      array (
        'method' => 'PUT',
        'name' => 'billing/plans/{id}',
      ),
      11 => 
      array (
        'method' => 'DELETE',
        'name' => 'billing/plans',
      ),
      12 => 
      array (
        'method' => 'POST',
        'origin' => 'admin',
        'name' => 'billing/subscriptions',
      ),
      13 => 
      array (
        'method' => 'PUT',
        'origin' => 'admin',
        'name' => 'billing/subscriptions/{id}',
      ),
      14 => 
      array (
        'method' => 'DELETE',
        'origin' => 'admin',
        'name' => 'billing/subscriptions/{id}',
      ),
      15 => 
      array (
        'method' => 'POST',
        'name' => 'users/{id}/password/change',
      ),
      16 => 
      array (
        'method' => 'DELETE',
        'origin' => 'admin',
        'name' => 'users/{id}',
      ),
      17 => 
      array (
        'method' => 'PUT',
        'origin' => 'admin',
        'name' => 'users/{id}',
      ),
      18 => 
      array (
        'method' => 'POST',
        'origin' => 'admin',
        'name' => 'users/{id}',
      ),
      19 => 
      array (
        'method' => 'POST',
        'origin' => 'admin',
        'name' => 'users/{id}/groups/attach',
      ),
      20 => 
      array (
        'method' => 'POST',
        'origin' => 'admin',
        'name' => 'users/{id}/groups/detach',
      ),
      21 => 
      array (
        'method' => 'DELETE',
        'name' => 'users/delete-multiple',
      ),
      22 => 
      array (
        'method' => 'DELETE',
        'name' => 'groups/{id}',
      ),
      23 => 
      array (
        'method' => 'PUT',
        'name' => 'groups/{id}',
      ),
      24 => 
      array (
        'method' => 'POST',
        'name' => 'groups',
      ),
      25 => 
      array (
        'method' => 'POST',
        'name' => 'groups/{id}/add-users',
      ),
      26 => 
      array (
        'method' => 'POST',
        'name' => 'groups/{id}/remove-users',
      ),
      27 => 
      array (
        'method' => 'POST',
        'origin' => 'admin',
        'name' => 'projects',
      ),
      28 => 
      array (
        'method' => 'PUT',
        'origin' => 'admin',
        'name' => 'projects/{id}',
      ),
      29 => 
      array (
        'method' => 'DELETE',
        'origin' => 'admin',
        'name' => 'projects',
      ),
      30 => 
      array (
        'method' => 'POST',
        'name' => 'projects/{id}/publish',
      ),
      31 => 
      array (
        'method' => 'GET',
        'name' => 'projects/{id}/download',
      ),
      32 => 
      array (
        'method' => 'POST',
        'name' => 'templates',
      ),
      33 => 
      array (
        'method' => 'PUT',
        'name' => 'templates/{id}',
      ),
      34 => 
      array (
        'method' => 'PUT',
        'name' => 'templates/{name}',
      ),
      35 => 
      array (
        'method' => 'DELETE',
        'name' => 'templates',
      ),
    ),
    'site' => 
    array (
      'version' => '2.0.4',
      'demo' => false,
      'disable_update_auth' => false,
      'use_symlinks' => false,
    ),
    'permissions' => 
    array (
      'groups' => 
      array (
        'users' => 
        array (
          'users.view' => 1,
          'localizations.show' => 1,
          'pages.view' => 1,
          'uploads.create' => 1,
          'projects.create' => 1,
          'editors.enable' => 1,
          'plans.view' => 1,
          'templates.view' => 1,
        ),
        'guests' => 
        array (
          'users.view' => 1,
          'pages.view' => 1,
        ),
      ),
      'all' => 
      array (
        'admin' => 
        array (
          0 => 
          array (
            'name' => 'admin.access',
            'description' => 'Required in order to access any admin area page.',
          ),
          1 => 
          array (
            'name' => 'permissions.view',
            'description' => 'Allows viewing of permissions list.',
          ),
          2 => 
          array (
            'name' => 'appearance.update',
            'description' => 'Allows access to appearance editor.',
          ),
        ),
        'groups' => 
        array (
          0 => 'groups.view',
          1 => 'groups.create',
          2 => 'groups.update',
          3 => 'groups.delete',
        ),
        'analytics' => 
        array (
          0 => 'reports.view',
        ),
        'pages' => 
        array (
          0 => 'pages.view',
          1 => 'pages.create',
          2 => 'pages.update',
          3 => 'pages.delete',
        ),
        'uploads' => 
        array (
          0 => 'uploads.view',
          1 => 'uploads.create',
          2 => 'uploads.delete',
        ),
        'users' => 
        array (
          0 => 'users.view',
          1 => 'users.create',
          2 => 'users.update',
          3 => 'users.delete',
        ),
        'localizations' => 
        array (
          0 => 'localizations.view',
          1 => 'localizations.create',
          2 => 'localizations.update',
          3 => 'localizations.delete',
        ),
        'mail_templates' => 
        array (
          0 => 'mail_templates.view',
          1 => 'mail_templates.update',
        ),
        'settings' => 
        array (
          0 => 'settings.view',
          1 => 'settings.update',
        ),
        'builder' => 
        array (
          0 => 
          array (
            'name' => 'projects.publish',
            'description' => 'Allow user to publish projects to their own FTP server.',
          ),
          1 => 
          array (
            'name' => 'editors.enable',
            'description' => 'Allow user to use html,css and js code editors.',
          ),
          2 => 
          array (
            'name' => 'projects.download',
            'description' => 'Allow user to download their project .zip file.',
          ),
        ),
        'projects' => 
        array (
          0 => 
          array (
            'name' => 'projects.view',
          ),
          1 => 
          array (
            'name' => 'projects.create',
          ),
          2 => 
          array (
            'name' => 'projects.update',
          ),
          3 => 
          array (
            'name' => 'projects.delete',
          ),
        ),
        'plans' => 
        array (
          0 => 
          array (
            'name' => 'plans.view',
          ),
          1 => 
          array (
            'name' => 'plans.create',
          ),
          2 => 
          array (
            'name' => 'plans.update',
          ),
          3 => 
          array (
            'name' => 'plans.delete',
          ),
        ),
      ),
    ),
  ),
);
