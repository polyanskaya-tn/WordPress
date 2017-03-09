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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'wordpress');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '9cNYgP8boSXhRQjs');

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
define('AUTH_KEY',         'gMqgT1wf,Ho=fe*Uc~:ZW}!H:MWMP/^GJ~Sra* MM*Y{%/o&X2otXfRbw>.!Dre<');
define('SECURE_AUTH_KEY',  '(|RTk)sifG+Jwe_9TN|)0P#;hY_^.dc_g7V@gFc_YWPbn~q5$ToSpe)uB;MIiBja');
define('LOGGED_IN_KEY',    'l7VrJ cdM{9BYY6:7i..JqJ/VsD<cv<BhAwm{!h?eHO~sqAr#2fNq{TeJy`SG.Vj');
define('NONCE_KEY',        '<xbk{:/mkNN:+3N%Lt>7`x8TSD0J/~ }%]rO#d4>yig<=5eu]93h65>&O_zJz5l4');
define('AUTH_SALT',        ')bf%~<<`/bM(JL&s+U[&m;B2P~:y1YiU>?I?{A3d:A}<`:EI.HGbW)t 5!Ww^=n~');
define('SECURE_AUTH_SALT', 'l,~:$VWd<,#b#2kS+r+83Fb8-a3<LR1{aAe@wD9e$QNe):mf_Xiog6olWw<Ky&ia');
define('LOGGED_IN_SALT',   'xFS13jyO/LcNA:R$ HR#U=k_x=&W0qAxd;Vj?uL5*) X@c]:~=8W6A Ihlm2Ck{w');
define('NONCE_SALT',       'y#lY.+SPH~uda^27=-]@sHHd1k){xjOpcxgq?GcecD;4:3J&!F-XT(]$JLaC]<*)');

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

