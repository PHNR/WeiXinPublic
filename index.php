<?PHP header('Content-type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_error', 1);
if(get_magic_quotes_gpc()) {
    function stripslashes_deep($value) {
        $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
        return $value;
    }

    $_POST = array_map('stripslashes_deep', $_POST);
    $_GET = array_map('stripslashes_deep', $_GET);
    $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
}
define('APP_NAME', 'cms');
define('CONF_PATH', './data/Conf/');
define('TMPL_PATH', './tpl/');
define('HTML_PATH', './data/html/');
define('CORE', './');
$GLOBALS['_beginTime'] = microtime(true);
define('MEMORY_LIMIT_ON', function_exists('memory_get_usage'));
if(MEMORY_LIMIT_ON) $GLOBALS['_startUseMems'] = memory_get_usage();
define('APP_PATH', './weiwin/');
defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . '/');
define('RUNTIME_PATH', './data/Conf/logs/');
defined('RUNTIME_PATH') or define('RUNTIME_PATH', APP_PATH . 'Runtime/');
define('APP_DEBUG', 1);
defined('APP_DEBUG') or define('APP_DEBUG', false);
$runtime = defined('MODE_NAME') ? '~' . strtolower(MODE_NAME) . '_runtime.php' : '~runtime.php';
defined('RUNTIME_FILE') or define('RUNTIME_FILE', RUNTIME_PATH . $runtime);
if(!APP_DEBUG && is_file(RUNTIME_FILE)) {
    require RUNTIME_FILE;
} else {
    defined('THINK_PATH') or define('THINK_PATH', dirname(__FILE__) . '/');
    require THINK_PATH . 'Common/runtime.php';
}