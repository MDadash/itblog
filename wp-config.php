<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'itblog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ci3B%I]{R_V$_9wTTxd1P3D?j5;ci0LJ^P.iTPqiO -;FNbz/5dL~J(j/h}SDutb');
define('SECURE_AUTH_KEY',  '_nGJP ^[zQc*<USQTGJYBgep/Ca1?e&3Cprmt=y,3q1Xbv+V[tnrD@ZAW8:#>$tj');
define('LOGGED_IN_KEY',    '.1r+(Zb6:Io4&{E:c2-W6hr<$RW>?<rcW?,2r)hXE{/)g9s<D$SK]_P/%w|@) v ');
define('NONCE_KEY',        '.[;$BeX~9v@%FATjQ9qq#X_-x|~`Iv9PeM2v}Bgg0yh8>QiGeznE|v B;BcQn^+[');
define('AUTH_SALT',        'k0?1S C9Y}_um.7gFf`UVC{jDLBY`M#Nhs*zzsW99fsh|1*Q8lgB3t1XH8:%?i45');
define('SECURE_AUTH_SALT', 'DjK4T7C5 krac`f@lW5B+y{K)wVKRfhQ!9XIqb#;qt6ML::e8Ja[y#iZ.&;;~I ,');
define('LOGGED_IN_SALT',   'O%F3gmaKmJ MfA|eS2{UJ6{,)4NxEo,LDo::a77xNI-]n#W/uT)ZaxM|:3U<`LrE');
define('NONCE_SALT',       '6]!=%-Nd@#f6`7$azsb+7XM5%63a(Hfz)TTIRF)ApUg.QUB5Qp+@^|8}V7`pA]+i');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
  define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
