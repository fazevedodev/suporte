<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 15:26:48
         compiled from ".\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63455307fc85c5ddb6-67327875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1393165602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63455307fc85c5ddb6-67327875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5307fc85d15767_86184552',
  'variables' => 
  array (
    'abertos' => 0,
    'i' => 0,
    'chamado' => 0,
    'paginas' => 0,
    'pagina' => 0,
    'atendimentos' => 0,
    'fechados' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307fc85d15767_86184552')) {function content_5307fc85d15767_86184552($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/960_24_col.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/simpletabs.css" />
        <script type="text/javascript" src="js/simpletabs_1.3.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container_24">
            <div class="simpleTabs">
                <ul class="simpleTabsNavigation">
                    <li><a href="#">Abertos</a></li>
                    <li><a href="#">Em Atendimento</a></li>
                    <li><a href="#">Fechados</a></li>
                </ul>
                <div class="simpleTabsContent">
                    <table class="admin">
                        <tr class="header">
                            <th>Situação</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Ticket</th>
                            <th>Setor</th>
                            <th>Tipo</th>
                            <th>Nome</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['chamado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chamado']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abertos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chamado']->key => $_smarty_tpl->tpl_vars['chamado']->value) {
$_smarty_tpl->tpl_vars['chamado']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['chamado']->key;
?>
                            <tr
                                <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0) {?>
                                    class="par"
                                <?php } else { ?>
                                    class="impar"
                                <?php }?>
                            >
                                <td
                                    <?php if (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="ABERTO") {?>
                                        class="aberto"
                                    <?php } elseif (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="EM ATENDIMENTO") {?>
                                        class="atendimento"
                                    <?php } elseif (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="FECHADO") {?>
                                        class="fechado"
                                    <?php }?>
                                >
                                    <a href="chamado.php?ticket=<?php echo $_smarty_tpl->tpl_vars['chamado']->value['ticket'];?>
"><?php echo ucfirst(mb_strtolower($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8'));?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['data'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['hora'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['ticket'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['setor'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['tipo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['nome'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php if (isset($_smarty_tpl->tpl_vars['paginas']->value)) {?>
                        <div class="paginacao">
                            <?php  $_smarty_tpl->tpl_vars['pagina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pagina']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pagina']->key => $_smarty_tpl->tpl_vars['pagina']->value) {
$_smarty_tpl->tpl_vars['pagina']->_loop = true;
?>
                                <a href="admin.php?p=<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</a>
                            <?php } ?>
                        </div>
                    <?php }?>
                </div>
                <div  class="simpleTabsContent">
                    <table class="admin">
                        <tr class="header">
                            <th>Situação</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Ticket</th>
                            <th>Setor</th>
                            <th>Tipo</th>
                            <th>Nome</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['chamado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chamado']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['atendimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chamado']->key => $_smarty_tpl->tpl_vars['chamado']->value) {
$_smarty_tpl->tpl_vars['chamado']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['chamado']->key;
?>
                            <tr
                                <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0) {?>
                                    class="par"
                                <?php } else { ?>
                                    class="impar"
                                <?php }?>
                            >
                                <td
                                    <?php if (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="ABERTO") {?>
                                        class="aberto"
                                    <?php } elseif (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="EM ATENDIMENTO") {?>
                                        class="atendimento"
                                    <?php } elseif (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="FECHADO") {?>
                                        class="fechado"
                                    <?php }?>
                                >
                                    <a href="chamado.php?ticket=<?php echo $_smarty_tpl->tpl_vars['chamado']->value['ticket'];?>
"><?php echo ucfirst(mb_strtolower($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8'));?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['data'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['hora'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['ticket'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['setor'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['tipo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['nome'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div  class="simpleTabsContent">
                    <table class="admin">
                        <tr class="header">
                            <th>Situação</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Ticket</th>
                            <th>Setor</th>
                            <th>Tipo</th>
                            <th>Nome</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['chamado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chamado']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fechados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chamado']->key => $_smarty_tpl->tpl_vars['chamado']->value) {
$_smarty_tpl->tpl_vars['chamado']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['chamado']->key;
?>
                            <tr
                                <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0) {?>
                                    class="par"
                                <?php } else { ?>
                                    class="impar"
                                <?php }?>
                            >
                                <td
                                    <?php if (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="ABERTO") {?>
                                        class="aberto"
                                    <?php } elseif (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="EM ATENDIMENTO") {?>
                                        class="atendimento"
                                    <?php } elseif (mb_strtoupper($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8')=="FECHADO") {?>
                                        class="fechado"
                                    <?php }?>
                                >
                                    <a href="chamado.php?ticket=<?php echo $_smarty_tpl->tpl_vars['chamado']->value['ticket'];?>
"><?php echo ucfirst(mb_strtolower($_smarty_tpl->tpl_vars['chamado']->value['situacao'], 'UTF-8'));?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['data'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['hora'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['ticket'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['setor'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['tipo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['chamado']->value['nome'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html><?php }} ?>
