<?php
/** 
 * WordPress 基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL 设置、数据库表名前缀、密钥、
 * WordPress 语言设定以及 ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑 wp-config.php} Codex 页面。MySQL 设置具体信息请咨询您的空间提供商。
 *
 * 这个文件用在于安装程序自动生成 wp-config.php 配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后输入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress 数据库的名称 */
define('DB_NAME', 'hdm0010557_db');

/** MySQL 数据库用户名 */
define('DB_USER', 'hdm0010557');

/** MySQL 数据库密码 */
define('DB_PASSWORD', 'shirt1016');

/** MySQL 主机 */
define('DB_HOST', 'hdm-001.hichina.com');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密匙设定。
 *
 * 您可以随意写一些字符
 * 或者直接访问 {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 私钥生成服务}，
 * 任何修改都会导致 cookie 失效，所有用户必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z_oM(kY+(|`4L%|tV&U8Q2Ix-h>{R_h!_2^l(;UxDXeqeXd_v!]<H!fFlJ?E0O$S');
define('SECURE_AUTH_KEY',  '6RFRsKjlw@:Mu-n`4;PD.pq+QZRgJUHnwmTun?}!|i}}=d0Yq||@+_#1wZkNzEZ:');
define('LOGGED_IN_KEY',    'dm?0(e<+|=}bfFC|=|bL{RSZo,u8+aMI[;:s]R8hJ>xSuwS [%-9*:D/}pCpqns3');
define('NONCE_KEY',        '_C hdSm2N%nCuXV>sL4}sD-O=+GL`o<#zkZ@IWSZ`9I+*JXD`o+N&Q$J;1D*^fh%');
define('AUTH_SALT',        'QM>ijJ-(i=_+6cjY9i-F2owWR,b`a->k(6Rp--._9jjcL |X||xM:N([fCCrhR9}');
define('SECURE_AUTH_SALT', '[5p5KJ2IM0-c-P*</Vh$-}xKwMR5 IlqmA$VdDxZkS86:#Sb|j?XWL?sFm/k,5r0');
define('LOGGED_IN_SALT',   '[mY.x=PJayXHTKi8jlO?-3h&389Mx^]>$*Z9wdl$stG<qPcI+RZy4jjbr4G+C=ps');
define('NONCE_SALT',       'Ur%vhU-s9*BBwS7b>Sv/].bCHE@6hAs1k5L/$R~T4K42FT~I[8s7_Rw|8hBCtWJW');

/**#@-*/

/**
 * WordPress 数据表前缀。
 *
 * 如果您有在同一数据库内安装多个 WordPress 的需求，请为每个 WordPress 设置不同的数据表前缀。
 * 前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_shaderweb';

/**
 * WordPress 语言设置，中文版本默认为中文。
 *
 * 本项设定能够让 WordPress 显示您需要的语言。
 * wp-content/languages 内应放置同名的 .mo 语言文件。
 * 要使用 WordPress 简体中文界面，只需填入 zh_CN。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress 调试模式。
 *
 * 将这个值改为“true”，WordPress 将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用本功能。
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress 目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置 WordPress 变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
