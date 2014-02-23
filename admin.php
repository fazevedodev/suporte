<?php
    require("libs/Smarty.class.php");
    require("utils/MySqlConnector.class.php");
    
    $db = new MySqlConnector("localhost", "suporte", "root", "");
    if(!$db->connect()) {
        die("Não foi possível conectar-se ao banco de dados.");
    }
    
    $chamados_abertos = $db->execSql("SELECT *
                                      FROM chamado
                                      WHERE chamado.id_situacao_chamado = (SELECT id FROM situacao_chamado WHERE situacao_chamado.nome LIKE 'Aberto')");
    $abertos = array();
    foreach($chamados_abertos as $aberto) {
        $setor_dados = $db->execSql("SELECT * FROM setor WHERE setor.id='".$aberto['id_setor']."'");
        $tipo_dados = $db->execSql("SELECT * FROM tipo_chamado WHERE tipo_chamado.id='".$aberto['id_tipo_chamado']."'");
        
        array_push($abertos, array('ticket' => $aberto['ticket'],
                                   'data' => $aberto['data'],
                                   'hora' => $aberto['hora'],
                                   'nome' => $aberto['nome'],
                                   'cpf' => $aberto['cpf'],
                                   'sala' => $aberto['sala'],
                                   'ramal' => $aberto['ramal'],
                                   'email' => $aberto['email'],
                                   'descricao' => $aberto['descricao'],
                                   'tipo' => $tipo_dados[0]['descricao'],
                                   'setor' => $setor_dados[0]['sigla']));
    }
    
    $chamados_atendimentos = $db->execSql("SELECT *
                                           FROM chamado
                                           WHERE chamado.id_situacao_chamado = (SELECT id FROM situacao_chamado WHERE situacao_chamado.nome LIKE 'Em atendimento')");
    $atendimentos = array();
    foreach($chamados_atendimentos as $atendimento) {
        $setor_dados = $db->execSql("SELECT * FROM setor WHERE setor.id='".$atendimento['id_setor']."'");
        $tipo_dados = $db->execSql("SELECT * FROM tipo_chamado WHERE tipo_chamado.id='".$atendimento['id_tipo_chamado']."'");
        
        array_push($atendimentos, array('ticket' => $atendimento['ticket'],
                                        'data' => $atendimento['data'],
                                        'hora' => $atendimento['hora'],
                                        'nome' => $atendimento['nome'],
                                        'cpf' => $atendimento['cpf'],
                                        'sala' => $atendimento['sala'],
                                        'ramal' => $atendimento['ramal'],
                                        'email' => $atendimento['email'],
                                        'descricao' => $atendimento['descricao'],
                                        'tipo' => $tipo_dados[0]['descricao'],
                                        'setor' => $setor_dados[0]['sigla']));
    }
    
    $chamados_fechados = $db->execSql("SELECT *
                                       FROM chamado
                                       WHERE chamado.id_situacao_chamado = (SELECT id FROM situacao_chamado WHERE situacao_chamado.nome LIKE 'Fechado')");
    $fechados = array();
    foreach($chamados_fechados as $fechado) {
        $setor_dados = $db->execSql("SELECT * FROM setor WHERE setor.id='".$fechado['id_setor']."'");
        $tipo_dados = $db->execSql("SELECT * FROM tipo_chamado WHERE tipo_chamado.id='".$fechado['id_tipo_chamado']."'");
        
        array_push($abertos, array('ticket' => $fechado['ticket'],
                                   'data' => $fechado['data'],
                                   'hora' => $fechado['hora'],
                                   'nome' => $fechado['nome'],
                                   'cpf' => $fechado['cpf'],
                                   'sala' => $fechado['sala'],
                                   'ramal' => $fechado['ramal'],
                                   'email' => $fechado['email'],
                                   'descricao' => $fechado['descricao'],
                                   'tipo' => $tipo_dados[0]['descricao'],
                                   'setor' => $setor_dados[0]['sigla']));
    }
    
    $smarty = new Smarty();
    
    $smarty->assign("abertos", $abertos);
    $smarty->assign("atendimentos", $atendimentos);
    $smarty->assign("fechados", $fechados);
    
    $paginas = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $smarty->assign("paginas", $paginas);
    
    $smarty->display("admin.tpl");
?>