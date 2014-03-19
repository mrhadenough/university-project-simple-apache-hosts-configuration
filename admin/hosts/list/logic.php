<?
@session_start();
if (@$_SESSION['login'] != 'admin') header('Location: /admin/login');

// remove, enable or disable
if (isset($_REQUEST['act']) && isset($_REQUEST['name'])) {
    $methods = array('remove', 'enable', 'disable');
    $act = $_REQUEST['act'];
    if (!in_array($act, $methods))
        die();

    $name = $_REQUEST['name'];

    $f = fopen($_SERVER['DOCUMENT_ROOT'] . "/tmp/hosts_$act/$name.conf",'w');
    fclose($f);
    echo 1;
    die();
}

// get host list
$tmp = array();

$d = dir('/etc/apache2/sites-available');
while ($f = $d->read()) {
    if ($f[0] == '.') continue;
    $tmp[] = $f;
}

sort($tmp);
$hosts = array();

foreach ($tmp as $name) {
    $host['name'] = substr($name, 0,-5);;
    $host['enabled'] = (file_exists('/etc/apache2/sites-enabled/' .$name ))? true: false;
    $hosts[] = $host;
}
