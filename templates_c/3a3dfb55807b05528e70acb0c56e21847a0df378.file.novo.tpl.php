<?php /* Smarty version Smarty-3.1.16, created on 2014-02-24 14:23:27
         compiled from ".\templates\novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288805307ef3344b2c0-17163682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a3dfb55807b05528e70acb0c56e21847a0df378' => 
    array (
      0 => '.\\templates\\novo.tpl',
      1 => 1393248183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288805307ef3344b2c0-17163682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5307ef3347a0d9_78853018',
  'variables' => 
  array (
    'setores' => 0,
    'setor' => 0,
    'tipos' => 0,
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307ef3347a0d9_78853018')) {function content_5307ef3347a0d9_78853018($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/960_24_col.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#cpf").mask("999.999.999-99");
            });
        </script>
        <title></title>
    </head>
    <body>
        <div class="container_24">
            <form method="POST" action="ticket.php">
                <table class="chamado">
                    <tr>
                        <td>
                            <div class="rotulo">
                                Nome
                            </div>
                            <div class="valor">
                                <input type="text" name="nome"/>
                            </div>
                        </td>
                        <td>
                            <div class="rotulo">
                                CPF
                            </div>
                            <div class="valor">
                                <input type="text" name="cpf" id="cpf"/>
                            </div>
                        </td>
                        <td>
                            <div class="rotulo">
                                Número da Sala
                            </div>
                            <div class="valor">
                                <input type="text" name="sala"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="rotulo">
                                Ramal
                            </div>
                            <div class="valor">
                                <input type="text" name="ramal"/>
                            </div>
                        </td>
                        <td>
                            <div class="rotulo">
                                E-mail
                            </div>
                            <div class="valor">
                                <input type="text" name="email"/>
                            </div>
                        </td>
                        <td>
                            <div class="rotulo">
                                Setor
                            </div>
                            <div class="valor">
                                <select name="setor">
                                    <?php  $_smarty_tpl->tpl_vars['setor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setor']->key => $_smarty_tpl->tpl_vars['setor']->value) {
$_smarty_tpl->tpl_vars['setor']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['setor']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['setor']->value['sigla'];?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="rotulo">
                                Tipo de Chamado
                            </div>
                            <div class="valor">
                                <select name="setor">
                                    <?php  $_smarty_tpl->tpl_vars['tipo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tipo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->key => $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['descricao'];?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="rotulo">
                                Descrição
                            </div>
                            <div class="valor">
                                <textarea name="descricao" rows="10" cols="80"></textarea>
                                <div align="center">
                                    <input type="submit" value="Abrir Chamado"/>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html><?php }} ?>
