<?php
    require("libs/Smarty.class.php");
    
    $smarty = new Smarty();
    
    $setores = array(array('id' => 1, 'sigla' => 'ASCOM'),
                     array('id' => 2, 'sigla' => 'CGMI'),
                     array('id' => 3, 'sigla' => 'CGMRR'),
                     array('id' => 4, 'sigla' => 'COCAP'),
                     array('id' => 5, 'sigla' => 'CGMAB'));
    $smarty->assign('setores', $setores);
    
    $tipos = array(array('id' => 1, 'descricao' => 'Problema em equipamento'),
                   array('id' => 2, 'descricao' => 'Problema de software'),
                   array('id' => 3, 'descricao' => 'Problema de rede e conectividade'),
                   array('id' => 4, 'descricao' => 'Instalação de software'),
                   array('id' => 5, 'descricao' => 'Instalação de equipamento'));
    $smarty->assign('tipos', $tipos);
    
    $smarty->display("novo.tpl");
?>