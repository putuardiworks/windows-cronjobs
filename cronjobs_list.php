<?php

require_once __DIR__ . '/sys/functions.php';
$CONFIG = get_user_config();
$php = $CONFIG['php_path'];


// ADD YOUR CRON JOBS HERE!!!
$cronjobs_list = [
    // command 1
    // cpanel: * * * * * /usr/local/bin/php /home/putuardiworks/windows-cronjobs/test/test1.php
    "* * * * * $php ./test/test1.php",

    // command 2
    // cpanel: * * * * * /usr/local/bin/php /home/putuardiworks/windows-cronjobs/test/test1.php
    "* * * * * $php ./test/test2.php",

    // command 3
    // cpanel: */5 * * * * /usr/local/bin/php /home/putuardiworks/windows-cronjobs/test/test1.php
    "*/5 * * * * $php ./test/test3.php",
];
