<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/header.php' ?>
<? include 'logic.php'?>

<div class="center-content">
    <div class="center-title">
        <h1><strong>Вхід в систему</strong></h1>
    </div>
    <form action="" method="post" class="login-from">
        <input type="hidden" name="act" value="login">
        <input type="text" placeholder="Введіть логін" name="login"><br>
        <input type="password" placeholder="Введіть пароль" name="password"><br>
        <input type="submit" value="Вхід">
    </form>
    <? if (isset($errorLogin)) { ?>
        <p>Не вірний логін або пароль</p>
    <? } ?>
</div>

<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/footer.php' ?>