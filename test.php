<?PHP
error_reporting(E_ALL);
test_func('pfsockopen');
test_func('curl_init');
test_func('stream_socket_client');
test_func('pdf_new');
test_func('mysqli_connect');
test_ini('request_order');
test_ini('register_globals');
test_ini('register_globals');
test_class('imagick');
echo decbin(E_ALL & ~E_NOTICE & ~E_WARNING) . '<br>';
echo decbin(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED) . '<br>';
echo decbin(E_ALL & ~E_NOTICE & ~E_WARNING & ~(defined('E_DEPRECATED') ? E_DEPRECATED : 0)) . '<br>';
echo 'Predefined value E_DEPRECATED is 0 : ' . (intval((E_DEPRECATED)) === 0 ? 'true' : 'false') . '<br>';
echo 'Intval E_DEPRECATED is : ' . (intval((E_DEPRECATED))) . '<br>';
echo 'Predefined value E_DEPRECATED is : ' . (defined('E_DEPRECATED') ? 'true' : 'false') . '<br>';
echo (decbin(false)) . '<br>';
echo 'The list of disabled functions is: ' . ini_get('disable_functions').'<br>';
echo "base64_decode('TG9nLmNsYXNzLnBocA=='):".base64_decode('TG9nLmNsYXNzLnBocA==').'<br>';
echo "base64_decode('RmVoYXZpb2VyLmNsYXNzIC5waHA='):".base64_decode('RmVoYXZpb2VyLmNsYXNzIC5waHA=').'<br>';

function test_func($func) {
    echo 'The Support Status of Internal Function <span style="color:blue;">' . $func . '</span> is: ' . (function_exists($func) ? 'true' : 'false') . '<br />';
}

function test_ini($config) {
    echo 'The php.ini config of setting <span style="color:blue;">' . $config . '</span> is: '
        . (in_array(($value = ini_get($config)), array(
            0, 1, '', '0', '1'
        ), true) ? ($value ? 'true' : 'false') : $value)
        . '<br />';
}

function test_class($class) {
    echo 'The class <span style="color:blue;">' . $class . '</span> now is: ' . (class_exists($class) ? 'avaiable' : 'unavaiable') . '<br />';
}

//phpinfo();
array(
    0 => array(
        'function' => 'appException', 'class' => 'Think', 'type' => '::', 'args' => array(
            0 => ThinkException::__set_state(array(
                    'type'  => 'ThinkException', 'extra' => true, 'message' => '无法加载模块:Users', 'string' => '',
                    'code'  => 0, 'file' => '/www/users/webpower8.cc/Common/functions.php', 'line' => 73,
                    'trace' => array(
                        0    => array(
                            'file'     => '/www/users/webpower8.cc/Common/functions.php', 'line' => 120,
                            'function' => 'throw_exception',
                        ), 1 => array(
                            'file'     => '/www/users/webpower8.cc/Lib/Core/App.class.php', 'line' => 123,
                            'function' => '_404',
                        ), 2 => array(
                            'file'     => '/www/users/webpower8.cc/Lib/Core/App.class.php', 'line' => 208,
                            'function' => 'exec', 'class' => 'App', 'type' => '::',
                            'args'     => array(0 => '无法加载模块:Users',),
                        ), 3 => array(
                            'file'     => '/www/users/webpower8.cc/Lib/Core/Think.class.php', 'line' => 41,
                            'function' => 'run', 'class' => 'App', 'type' => '::',
                            'args'     => array(0 => '无法加载模块:Users',),
                        ), 4 => array(
                            'file'     => '/www/users/webpower8.cc/Common/runtime.php', 'line' => 243,
                            'function' => 'start', 'class' => 'Think', 'type' => '::', 'args' => array(),
                        ), 5 => array(
                            'file'     => '/www/users/webpower8.cc/index.php', 'line' => 34,
                            'args'     => array(0 => '/www/users/webpower8.cc/Common/runtime.php',),
                            'function' => 'require',
                        ),
                    ),
                )),
        ),
    ),
);