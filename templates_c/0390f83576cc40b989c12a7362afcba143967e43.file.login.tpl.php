<?php /* Smarty version Smarty-3.1.16, created on 2014-02-25 18:07:19
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28998530ccb09a0f265-12439548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1393348038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28998530ccb09a0f265-12439548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530ccb09a883e4_72291509',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ccb09a883e4_72291509')) {function content_530ccb09a883e4_72291509($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <form method="POST" action="">
                    <table class="login">
                        <tr class="rotulo">
                            <td>Usuário</td>
                        </tr>
                        <tr class="valor">
                            <td>
                                <input type="text" name="usuario"/>
                            </td>
                        </tr>
                        <tr class="rotulo">
                            <td>Senha</td>
                        </tr>
                        <tr class="valor">
                            <td>
                                <input type="password" name="senha"/>
                                <div style="text-align: center;"><input type="submit" value="Login"/></div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html><?php }} ?>
