<?php
    require("libs/Smarty.class.php");
    
    $smarty = new Smarty();
    
    $chamados = array(
        array('data' => '01/02/2014',
              'hora' => '14:36',
              'ticket' => '98742531',
              'setor' => 'CGMRR',
              'tipo' => 'Instalação de software',
              'nome' => 'Maria Silva',
              'situacao' => 'ABERTO'),
        array('data' => '01/02/2014',
              'hora' => '12:00',
              'ticket' => '54621026',
              'setor' => 'CGAG',
              'tipo' => 'Problema em equipamento',
              'nome' => 'João Sobrenome',
              'situacao' => 'ABERTO'),
        array('data' => '10/11/2013',
              'hora' => '13:55',
              'ticket' => '574879132',
              'setor' => 'ASCOM',
              'tipo' => 'Problema de software',
              'nome' => 'Laura Lauren',
              'situacao' => 'FECHADO'),
        array('data' => '12/02/2014',
              'hora' => '16:23',
              'ticket' => '542168123',
              'setor' => 'CGPERT',
              'tipo' => 'Problema de rede e conectividade',
              'nome' => 'Joana Banana',
              'situacao' => 'EM ATENDIMENTO')
    );
    
    $smarty->assign("abertos", $chamados);
    $smarty->assign("atendimentos", array());
    $smarty->assign("fechados", array());
    
    $paginas = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $smarty->assign("paginas", $paginas);
    
    $smarty->display("admin.tpl");
?>