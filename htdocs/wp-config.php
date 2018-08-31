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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '<<1M-gbiQRnFF2|G(Rvt;wH3R~3D,%(.#!fIdMEiIOHr(v#`2R$DpKkC`/q2l9[$');
define('SECURE_AUTH_KEY',  '6v)q1VP.)>k>3r=zxpr70K:&54$evS`s9a,ny||L,=/4M}]L<Iyx/#z`F5JK9Zs(');
define('LOGGED_IN_KEY',    '(l,J5l(;KN!9_|dOHo!iCfe@;i(Cw3jXO5+H+U?N%E!iO0sNc5a/~r&hh&k5tMZ1');
define('NONCE_KEY',        'oL`N8~TPBULt[M-35#ZEZbkJ.heq-SD`+IN;Y)VW ^&lJf3dU6U6z+78Fa6dK%yG');
define('AUTH_SALT',        'qjCe9D~$Z(p%zmOH{1f*aPc</AR=G6;PzKEEoAEK)jxXn<1d57v L5v*4I2GSUq7');
define('SECURE_AUTH_SALT', '?_g,v4$99,_kUGo:|2{F3]:M&}`$yBKTUuHRyB2!BjWX[oeRY2].1n A(6<$Ww0I');
define('LOGGED_IN_SALT',   'o~Q1/{Mf`;4nNW4yecKc.W[&Re>>HKdTWy5ySdcdPQi2_A8}f@unw-oeu}_=hmFi');
define('NONCE_SALT',       'MLsT2e#&JX{G.$<%u{Iat2D6(/E8;0B^;yAKC6_}UdMuDEFc]xTXz:,rR!p?M@g!');

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
