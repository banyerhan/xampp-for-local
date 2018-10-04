
To phpmyadmin/config.inc.php

$cfg['ExecTimeLimit'] = 6000;
------------------------
post_max_size = 750M
upload_max_filesize = 750M
max_execution_time = 5000
max_input_time = 5000
memory_limit = 1000M
-----------------------
max_allowed_packet = 200M (in my.ini)
------------------------------------

Save it and restart apache and spl and try it again.

Thanks..
