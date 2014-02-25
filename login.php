<?php
    session_start();

    require("libs/Smarty.class.php");
    require("utils/MySqlConnector.class.php");
    
    $smarty = new Smarty();
    
    $smarty->display("login.tpl");
?>