<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/header.php' ?>
<? unset($_SESSION['login'])?>
    <div class="center-content">
        <div class="center-title">
            <h1><strong>Вихід з системи</strong></h1>
        </div>
        <p><strong>Вихід успішно виконаний. </strong> Тепер ви можете перейти на головну сторінку. Якщо цього не відбулось протягом 3 секунд перейдіть по слідуючій силці <a href="/">На головну</a></p>
    </div>
    <script>setTimeout(function(){window.location.href='/'}, 3000)</script>
<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/footer.php' ?>