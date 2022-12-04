<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress_carbook_training' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iA~~yv`I_Q:^%cmSu3&6u8Ctr>g4 *V_{+(qpHWK,w*,t63AcMYq&U@ptHUgHl./' );
define( 'SECURE_AUTH_KEY',  '&)AgKvr%_8L<jUtga:A2/aV$Fbhm=,@[xS:VD0w.9x~Et,A$P5V-o;#{ggB)u|#[' );
define( 'LOGGED_IN_KEY',    'NB:jct`,&I:i<OyAgtn->?mRK.YZwJuY0(:u!2)v;(SW6M}YD*QO<!joR$*X*,!L' );
define( 'NONCE_KEY',        'j`K|wNl>a6D,Zw5RosC 5-|Z|ajHvR6l;Dr20%g0aFCp)*ao.jS.ejz).<DLF9b3' );
define( 'AUTH_SALT',        'fUQ.c$oq@/9Y-3zyCc RIO-AH84@iWq[Rc@%&zb7cj5xC?_5D-P/DjM/4H6Pg/f5' );
define( 'SECURE_AUTH_SALT', '3zfx^T;>}MC07m4s#6x};0J/$FloL8oUE;[n8A$${|ZTT>2LCcNtf``m?7bUSj<c' );
define( 'LOGGED_IN_SALT',   'P?GtEh]@x5ZaAO]r70!#qf.E,^r_Zi6t>2e_^lYPjwXD`=k+PBTtWDlufEw_@Cv+' );
define( 'NONCE_SALT',       'N8S2]e8@p~P1em(_EzAHvlFF0}tq$qyyGy.aw)h5wFLQGs!0Gk@$iaHt/RF&r)lU' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'carbook_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );     // включение дебаг режима
define( 'WP_DEBUG_LOG', true ); // true - логирование ошибок в файл /wp-content/debug.log
define( 'WP_DEBUG_DISPLAY', true ); // false - отключает показ ошибок на экране
define( 'SCRIPT_DEBUG', true ); // используем полные версии JS и CSS файлов движка

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
