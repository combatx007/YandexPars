<?php
function auth_send(){
    header('WWW-Authenticate: Basic realm="Closed Zone"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body bgcolor=white link=blue vlink=blue alink=red>"
    ,"<h1>Ошибка аутентификации</h1>"
    ,"</body></html>";
    exit;
};
?>