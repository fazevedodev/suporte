<?php
    require("libs/Smarty.class.php");
    
    $smarty = new Smarty();
    
    if(isset($_REQUEST['ticket'])) {
        $smarty->assign("ticket", $_REQUEST['ticket']);
    }
    
    $smarty->assign("nome", "Maria Silva");
    $smarty->assign("cpf", "123.456.789-10");
    $smarty->assign("data", "01/02/2014");
    $smarty->assign("hora", "14:36");
    $smarty->assign("sala", 1234);
    $smarty->assign("ramal", 4321);
    $smarty->assign("email", "maria.silva@dnit.gov.br");
    $smarty->assign("setor", "CGMRR");
    $smarty->assign("tipo", "Instalação de software");
    $smarty->assign("descricao", nl2br("The revival of Korean Brood War seemingly cannot be stopped. Arguably it was never dead to begin with, but this doesn’t mean the current resurgence is anything short of miraculous. Just 2 years ago, hope seemed all but gone, but then Sonic outperformed himself over and over again.

The first Sonic KOTH tournament was extremely fun, but now we might be getting a more professional and frequent league, with a more standardized format, as sponsors start trickling in. Even though no hard facts are available just yet, the start certainly looks promising. Read on for this week’s Sonic Proleague preview."));
    $smarty->assign("situacao", "aberto");
    
    $opcoes = array(array('id' => 1, 'nome' => 'Aberto'), array('id' => 2, 'nome' => 'Em atendimento'), array('id' => 3, 'nome' => 'Fechado'));
    $smarty->assign("admin", true);
    $smarty->assign("opcoes", $opcoes);
    
    $smarty->display("chamado.tpl");
?>