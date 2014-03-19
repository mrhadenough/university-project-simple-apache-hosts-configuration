<?
@session_start();
if (@$_SESSION['login'] != 'admin') header('Location: /admin/login');

if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'addHost' && isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    $f = fopen($_SERVER['DOCUMENT_ROOT'] . "/tmp/hosts_add/$name.conf",'w');
    fwrite($f, $_REQUEST['config']);
    fclose($f);
}