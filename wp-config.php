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
define( 'DB_NAME', 'eximtrans' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U(}of6IPI-e8<XrOGG?Lk.@[>?mrTSCM6>%}J?fFRpP|R[xF+,r0ba8D-x UA<I&' );
define( 'SECURE_AUTH_KEY',  '5EF/oWNCio40oUYorGTw7Fp+-,n=]?y5J]g*ya+,#P**7`MB`<4.qcUoLS/i6eQA' );
define( 'LOGGED_IN_KEY',    'hWGhT^FN=e0ijM:>~<Ti3.ZI+z83K[)^6iCMU8D{7r{C0Btdk;s:z1tn:q!+mQl1' );
define( 'NONCE_KEY',        '<&w Yx`Ffj,`]@ yQ^j%i( ai!|Y:]g`(z|12<|{)p%7bckYt?M|S+aoyyRf`=3z' );
define( 'AUTH_SALT',        'O(o]AWGffM2eujG4%W&j?BU3V]W`q5GB23fgXMz2bXY-KsG]l$L5]o#+1;<~uq_H' );
define( 'SECURE_AUTH_SALT', 'qbcCP1#2xru9.%LYE$MWc>[)b#=jGxm4f`|/|N~LQiBM>DT Z,xp79A[#Gr59&=5' );
define( 'LOGGED_IN_SALT',   '|(Px`:ZJ]IvJKdac1t7!;Xv_8pC+<]`f9xx7fu}Z04vQe;)WYXby^ib=W#VHL<>M' );
define( 'NONCE_SALT',       'y(Tm7W$8hT6ug{+qXiPN7fpqe*$<>>{a0KW{V%13Hd[^7fw:`6s8tmJ)0-^82v`+' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
