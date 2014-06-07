<?
@session_start();
if (@$_SESSION['login'] != 'admin') header('Location: /admin/login');

if ($_REQUEST['file'] == 'file' && isset($_REQUEST['name']) ) {
    $name = str_replace(array('.', '/', "\\"), "", $_REQUEST['name']) . '.conf';

    if (file_exists("/etc/apache2/sites-available/$name")) {
        $text = file_get_contents("/etc/apache2/sites-available/$name");

        preg_match('/(?<=(<VirtualHost .:))\d+(?=>)/', $text, $matches);
        @$Port = $matches[0];

        preg_match('/(?<=ServerName )[\w\.]+/', $text, $matches);
        @$ServerName = $matches[0];

        preg_match('/(?<=ServerAlias )[\w\.]+/', $text, $matches);
        @$ServerAlias = $matches[0];

        preg_match('/(?<=ProxyPass )[\w\d\/:\.]+/', $text, $matches);
        @$ProxyPass = $matches[0];

        preg_match('/(?<=DocumentRoot ).+/', $text, $matches);
        @$DocumentRoot = $matches[0];

        preg_match('/(?<=RewriteCond ).+/', $text, $matches);
        @$RewriteCond = $matches[0];

        preg_match('/(?<=RewriteRule ).+/', $text, $matches);
        @$RewriteRule = $matches[0];

        preg_match('/(?<=ServerPath ).+/', $text, $matches);
        @$ServerPath = $matches[0];
    }
}

if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'addHost' && isset($_REQUEST['name'])) {
    $name = str_replace(array('.', '/', "\\"), "", $_REQUEST['name']);
    $f = fopen($_SERVER['DOCUMENT_ROOT'] . "/tmp/hosts_add/$name.conf",'w');
    fwrite($f, $_REQUEST['config']);
    fclose($f);
    $_SESSION['success_message'] = 'New setting has been saved';
}