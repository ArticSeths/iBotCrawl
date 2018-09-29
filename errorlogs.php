<?php
$salida = shell_exec('tail -n 50 /data/wwwlog/www.ibotcrawl.com/ssl_error.log');
echo "<pre>$salida</pre>";
?>