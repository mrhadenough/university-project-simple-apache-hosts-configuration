<? include $_SERVER['DOCUMENT_ROOT'] . '/header.php' ?>
<?  include $_SERVER['DOCUMENT_ROOT'] . '/admin/hosts/add/logic.php'?>
<div id="sidebar">
    <? include $_SERVER['DOCUMENT_ROOT'] . '/admin/hosts/menu.php'?>
</div>
<div id="text" >
    <h1><strong>Сворення нового хосту</strong></h1>
    <br>
    <form action="" method="post" class="edit-host">
        <input type="hidden" name="act" value="addHost" /><br>
        <input type="text" placeholder="Назва" name="name" /> <span class="hint">Назва серверу (Наприклад: google.com)</span> <br>
        <input type="text" placeholder="Адрес" name="address" /> <span class="hint">IP адреса системи (бажано залишити пустим)</span> <br>
        <input type="text" placeholder="Порт" name="port" /> <span class="hint">Порт на якому буде сервер</span><br>
        <input type="text" placeholder="DocumentRoot" name="documentRoot" /> <span class="hint">Шлях до папки з зайтом на локальному сервері</span> <br>
        <input type="text" placeholder="Адреса" name="remoteAddress" /> <span class="hint">Шлях до серверу (http://example.com/ або http://192.168.1.10/)</span> <br>
        <input type="text" placeholder="RewriteCond" name="rewriteCond" /> <span class="hint">RewriteCond</span> <br>
        <input type="text" placeholder="RewriteRule" name="rewriteRule" /> <span class="hint">RewriteRule</span> <br>
        <input type="text" placeholder="ServerPath" name="serverPath" /> <span class="hint">ServerPath</span> <br>
        <input type="submit" value="Додати хост" /><br><br>
        <strong>Server configuration</strong>
        <div><textarea name="config" class="preview-config" cols="70" rows="15"></textarea></div>
    </form>
</div>


<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/footer.php' ?>