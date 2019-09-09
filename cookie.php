<?php
if(!isset($_COOKIE['theme'])) {
    setcookie("theme", "dark-mode");
}
else {
    $cok = $_COOKIE['theme'];
    if($cok=="light-mode") {
        setcookie("theme", "dark-mode");
    }
    else {
        setcookie("theme", "light-mode");
    }
}
?>