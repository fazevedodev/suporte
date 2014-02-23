<?php /* Smarty version Smarty-3.1.16, created on 2014-02-22 23:26:45
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178325307ed55864b08-52635474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1393108004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178325307ed55864b08-52635474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5307ed55893900_16790590',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307ed55893900_16790590')) {function content_5307ed55893900_16790590($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
            <div class="grid_24">
                <table class="chamado">
                    <tr>
                        <td>
                            <div class="rotulo">
                                Acompanhar chamado
                            </div>
                            <div class="valor">
                                <form method="POST" action="chamado.php">
                                    <input type="text" name="ticket" style="width: 180px"/><input type="submit" value="Acompanhar Chamado"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="rotulo">
                                Novo chamado
                            </div>
                            <div class="valor">
                                <form action="novo.php">
                                    <input type="submit" value="Abrir Novo Chamado" style="width: 100%"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html><?php }} ?>
