<?php
    require("libs/Smarty.class.php");
            
    $smarty = new Smarty();
    $smarty->assign("ticket", 987458105);
    
    $smarty->display("ticket.tpl");
?>