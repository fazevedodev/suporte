<?php /* Smarty version Smarty-3.1.16, created on 2014-02-24 14:24:59
         compiled from ".\templates\ticket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144385307efefd00ce9-89338971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b267f344bdf5c2f5a090912643e12977d8e6987' => 
    array (
      0 => '.\\templates\\ticket.tpl',
      1 => 1393248183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144385307efefd00ce9-89338971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5307efefd3b671_64107923',
  'variables' => 
  array (
    'ticket' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307efefd3b671_64107923')) {function content_5307efefd3b671_64107923($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <td>
                    <div class="rotulo">
                        Mensagem
                    </div>
                    <div class="valor">
                        <p>O seu chamado foi aberto. Guarde o número do ticket abaixo para acompanhar o andamento do chamado.</p>
                    </div>
                    <div class="rotulo">
                        Número do Ticket
                    </div>
                    <div class="ticket">
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value;?>

                    </div>
                </td>
            </table>
        </div>
    </body>
</html><?php }} ?>
