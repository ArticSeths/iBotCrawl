<?php
$salida = shell_exec('tail -n 25 /data/wwwlog/www.ibotcrawl.com/ssl_error.log');
echo "<pre>$salida</pre>";
?>