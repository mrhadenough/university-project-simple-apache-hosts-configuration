<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/header.php' ?>
<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/admin/hosts/edit/logic.php'?>
<div id="sidebar">
    <? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/admin/hosts/menu.php'?>
</div>
<div id="text" >
    <? if (isset($_SESSION['success_message'])) { ?>
        <p class="success-message">
            <?= $_SESSION['success_message']?>
        </p>
        <? unset($_SESSION['success_message'])?>
    <? } ?>
    <h1><strong>Редагування віртуального хосту</strong></h1>
    <form action="" method="post" class="edit-host">
        <input type="hidden" name="act" value="addHost" /><br>
        <input type="text" placeholder="Назва" name="name" value="<?= $ServerName?>" /> <span class="hint">Не слід змінюати ім’я, при зміні імені створиться новий конфігураційний файл</span> <br>
        <input type="text" placeholder="Адрес" name="address" /> <span class="hint">IP адреса системи (бажано залишити пустим)</span> <br>
        <input type="text" placeholder="Порт" name="port" <?= $Port?>/> <span class="hint">Порт на якому буде сервер</span><br>
        <input type="text" placeholder="DocumentRoot" name="documentRoot" value="<?= $DocumentRoot?>" /> <span class="hint">Шлях до папки з зайтом на локальному сервері</span> <br>
        <input type="text" placeholder="Адреса" name="remoteAddress" value="<?= $ProxyPass ?>" /> <span class="hint">Шлях до серверу (http://example.com/ або http://192.168.1.10/)</span> <br>
        <input type="text" placeholder="RewriteCond" name="rewriteCond" value="<?=$RewriteCond?>" /> <span class="hint">RewriteCond</span> <br>
        <input type="text" placeholder="ServerPath" name="serverPath" value="<?=$ServerPath?>" /> <span class="hint">ServerPath</span> <br>
        <input type="submit" value="Зберегти хост" /><br><br>
        <strong>Server configuration</strong>
        <div><textarea name="config" class="preview-config" cols="70" rows="15"><?= $text?></textarea></div>
    </form>
</div>
<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/footer.php' ?>