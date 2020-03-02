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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '<8qnNY@sh)}dr^}@avsQl4%@x&iV]%V9aGB$Oqr@dFoZ&q)yYl7_mEC>27)5]p6a' );
define( 'SECURE_AUTH_KEY',  '>$uj`x]TVxX (LGKVz-L|iY]Zu,sVST<j*pZPO5U0dbn.w[<ROc#VU)]eQZ$w{+L' );
define( 'LOGGED_IN_KEY',    'k)P9]ikSwhLm5Wep^tM&1q2wUs?g7A% ze@s,Dm;og^<ZSd4L`Z;SRRylhIv_, ]' );
define( 'NONCE_KEY',        'IA4[W!|tl[$5$^(Z2vx3swLUIF4.E~X.WMrzc*Y#d}WVH|Op~TiLq:Sm[t3{UTh*' );
define( 'AUTH_SALT',        'akppgN{!^a&!T}P!ha5al)R?/%f%fcUW9FkTJyov*QD{9o$I!k< (]M@==aK13VM' );
define( 'SECURE_AUTH_SALT', 'KdosPoXH5^J*pIl%Z.hvx~<`KZaeykd]#B1Ga8*:NZ[*-(|Zd~^@#QBC4q&;7q=@' );
define( 'LOGGED_IN_SALT',   'x)*POEU&o[27~%;Vh^4Wq,RnS$TK.>%75tipqOnIrpC*)J)mO aHSLYL( vq-SM1' );
define( 'NONCE_SALT',       'p+B27@+6f60!!S1}rv$5IQm$01Lv!dSJWY-N6lx)%8KD5&S$8Ht 3.etMpK;C!1q' );

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
