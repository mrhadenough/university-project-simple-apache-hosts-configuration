<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/lib/controller.php'?>
<!DOCTYPE html>
<!--
Author: Reality Software
Website: http://www.realitysoftware.ca
Note: This is a free template released under the Creative Commons Attribution 3.0 license,
which means you can use it in any way you want provided you keep the link to the author intact.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <script src="/js/jquery-2.1.0.min.js"></script>
    <script src="/js/default.js"></script>
</head>
<body>
<!-- header -->
<div id="header">
    <div id="logo"><a href="#">Система контролю віртуальних хостів</a>
        <br />ХНУ</div>
    <div id="menu">
        <ul>
            <li><a href="/">Головна</a></li>
            <? if (@$_SESSION['login'] != 'admin') { ?>
                <li><a href="/about">Про сайт</a></li>
                <li><a href="/admin/login">Вхід</a></li>
            <? } else { ?>
                <li><a href="/admin/hosts">Хости</a></li>
                <li><a href="/about">Про сайт</a></li>
                <li><a href="/admin/logout">Вихід <span><?= $_SESSION['login']?></span></a></li>
            <? } ?>
        </ul>
    </div>
</div>
<!--end header -->
<div class="loading-box">
    <div class="bg-blank"></div>
    <div class="front-message">Loading...</div>
</div>
<!-- main -->
<div id="main">