<?php

$php = 'e:/xampp7/php/php.exe';

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
