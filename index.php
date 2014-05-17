<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/header.php' ?>

<div id="sidebar">
</div>
<div id="text" >
    <h1><strong>Вітаємо</strong></h1>
    <p><strong>Для нармальної роботи </strong> необхідно щоб усі нищевказані умови були виконані</p>
    <ul>
        <li>Встановлений mod_rewrite (a2enmod rewrite)</li>
        <li>Встановлений mod_proxy (a2enmod proxy)</li>
        <li>Налаштовані скорочені теги в файлі php.ini short_open_tag = On</li>
        <li>Щоб налаштування вступили в силу, необхідно перезавантажити сервер: (apache2ctl restart або service apache2 restart)</li>
    </ul>
    <h1>Основні моменти
    </h1>
    <p><strong>Логіка роботи:</strong> Від root користувача запускається <strong>bash</strong> скрипт який моніторить у певному інтервалі часу наявність файлу конфігурацій хостів. При наявності файлу він додається <strong>bash</strong> скриптом до доступних сайтів і активує його. Буде наданий список існуючих хостів і їх стан активності <strong>site-avalable site-enabled</strong>. При редагувані буде братись файл конфігурацій і перезаписуватимесь</p>
</div>
<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/footer.php' ?>