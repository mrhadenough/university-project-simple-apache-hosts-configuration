<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/header.php' ?>
<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/admin/hosts/list/logic.php'?>
    <div id="sidebar">
        <? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/admin/hosts/menu.php'?>
    </div>
    <div id="text" >
        <h1><strong>Список хостів</strong></h1><br>
        <table class="host-list">
            <? foreach ($hosts as $f) { ?>
                <tr>
                    <td><a href="/admin/hosts/edit/file/<?= $f['name']?>" title="Редагувати" class="<?= ($f['enabled'])? 'host-enabled': 'host-disabled' ?>" ><?= $f['name']?></a></td>
                    <td class="icon-cell">
                        <a href="#" class="action-button" title="<?= ($f['enabled'])? 'Деактивувати': 'Активувати'?>" data-name="<?= $f['name']?>" data-action="<?= ($f['enabled'])? 'disable': 'enable'?>">
                            <img src="/images/<?= ($f['enabled'])? 'disable': 'enable'?>_icon.png">
                        </a>
                    </td>
                    <td class="icon-cell"><a href="/admin/hosts/edit/file/<?= $f['name']?>" title="Редагувати" ><img src="/images/edit_icon.png"></a></td>
                    <td class="icon-cell"><a href="#" class="action-button" title="Видалити" data-name="<?= $f['name']?>" data-action="remove" ><img src="/images/delete_icon.png"></a></td>
                </tr>
            <? } ?>
        </table>
    </div>
<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/footer.php' ?>