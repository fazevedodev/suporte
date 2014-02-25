<?php /* Smarty version Smarty-3.1.16, created on 2014-02-24 14:25:18
         compiled from ".\templates\chamado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90385307f168bc2ac3-44986324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f8fe075a03fec0c7b57f7fd1f55b389aea7fd25' => 
    array (
      0 => '.\\templates\\chamado.tpl',
      1 => 1393248183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90385307f168bc2ac3-44986324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5307f168c571f4_03600654',
  'variables' => 
  array (
    'situacao' => 0,
    'admin' => 0,
    'opcoes' => 0,
    'opcao' => 0,
    'ticket' => 0,
    'nome' => 0,
    'cpf' => 0,
    'data' => 0,
    'sala' => 0,
    'ramal' => 0,
    'hora' => 0,
    'email' => 0,
    'setor' => 0,
    'tipo' => 0,
    'descricao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307f168c571f4_03600654')) {function content_5307f168c571f4_03600654($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/960_24_col.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <title></title>
    </head>
    <body>
        <div class="container_24">
            <table class="chamado">
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <div
                            <?php if (mb_strtoupper($_smarty_tpl->tpl_vars['situacao']->value, 'UTF-8')=="ABERTO") {?>
                                class="destaque-aberto"
                            <?php } elseif (mb_strtoupper($_smarty_tpl->tpl_vars['situacao']->value, 'UTF-8')=="EM ATENDIMENTO") {?>
                                class="destaque-atendimento"
                            <?php } elseif (mb_strtoupper($_smarty_tpl->tpl_vars['situacao']->value, 'UTF-8')=="FECHADO") {?>
                                class="destaque-fechado"
                            <?php }?>>
                            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['situacao']->value, 'UTF-8');?>

                        </div>
                    </td>
                </tr>
                <?php if (isset($_smarty_tpl->tpl_vars['admin']->value)&&$_smarty_tpl->tpl_vars['admin']->value==true) {?>
                    <tr>
                        <td colspan="3">
                            <div class="rotulo">
                                Nova situação
                            </div>
                            <div class="valor">
                                <form method="POST" action="">
                                    <select name="nova_situacao">
                                        <?php  $_smarty_tpl->tpl_vars['opcao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opcao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opcoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opcao']->key => $_smarty_tpl->tpl_vars['opcao']->value) {
$_smarty_tpl->tpl_vars['opcao']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['opcao']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['opcao']->value['nome'];?>
</option>
                                        <?php } ?>
                                    </select>
                                    <input type="submit" value="Salvar"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['ticket']->value)) {?>
                    <tr>
                        <td colspan="3" style="text-align:center;">
                            <div class="rotulo">Número do Ticket</div>
                            <div class="valor">
                                <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ticket']->value, 'UTF-8');?>

                            </div>
                        </td>
                    </tr>
                <?php }?>
                <tr>
                    <td><div class="rotulo">Nome</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</div></td>
                    <td><div class="rotulo">CPF</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
</div></td>
                    <td><div class="rotulo">Data de Abertura</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</div></td>
                </tr>
                <tr>
                    <td><div class="rotulo">Sala</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['sala']->value;?>
</div></td>
                    <td><div class="rotulo">Ramal</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['ramal']->value;?>
</div></td>
                    <td><div class="rotulo">Hora da Abertura</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
</div></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="rotulo">E-mail</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</div>
                    </td>
                    <td>
                        <div class="rotulo">Setor</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['setor']->value;?>
</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><div class="rotulo">Tipo de Chamado</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</div></td>
                </tr>
                <tr>
                    <td colspan="3"><div class="rotulo">Descrição</div><div class="valor"><?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
</div></td>
                </tr>
            </table>
        </div>
    </body>
</html>
<?php }} ?>
