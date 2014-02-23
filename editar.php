<?php
    require("libs/Smarty.class.php");
    
    $smarty = new Smarty();
    
    $smarty->assign("nome", "Maria Silva");
    $smarty->assign("cpf", "123.456.789-10");
    $smarty->assign("data", "01/02/2014");
    $smarty->assign("hora", "14:36");
    $smarty->assign("sala", 1234);
    $smarty->assign("ramal", 4321);
    $smarty->assign("email", "maria.silva@dnit.gov.br");
    $smarty->assign("tipo", "Instalação de software");
    $smarty->assign("descricao", "Instalar AutoCAD 2014.");
    
    $opcoes = array(
        array('id' => 1, 'nome' => 'Aberto'),
        array('id' => 2, 'nome' => 'Em Atendimento'),
        array('id' => 3, 'nome' => 'Fechado')
    );
    
    $smarty->assign('id_situacao', 2);
    $smarty->assign('opcoes', $opcoes);
    
    $smarty->display("editar.tpl");
?>