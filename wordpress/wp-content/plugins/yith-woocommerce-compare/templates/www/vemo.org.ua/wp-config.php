<?php
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/p284179/www/vemo.org.ua/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DISABLE_WP_CRON', true);
define('FS_METHOD', 'direct');

define('DB_NAME', 'p284179_vemo');
define('DB_USER', 'p284179_vemo');
define('DB_PASSWORD', 'Pw6266kPSX');

define('DB_HOST', 'p284179.mysql.ihc.ru');


/** Кодировка базы данных при создании таблиц. */
define('DB_CHARSET', 'utf8');
/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 600); 

define('AUTH_KEY', 'впишите сюда уникальную фразу');
define('SECURE_AUTH_KEY', 'впишите сюда уникальную фразу');
define('LOGGED_IN_KEY', 'впишите сюда уникальную фразу');
define('NONCE_KEY', 'впишите сюда уникальную фразу');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'craz_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages.
 */
define ('WPLANG', 'ru_ru');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
?>