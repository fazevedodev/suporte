<?php /* Smarty version Smarty-3.1.16, created on 2014-02-22 02:35:30
         compiled from ".\templates\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318555307fe83bca148-80759797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '913c76638d779b2bf8f41b3426332ab6e33ba528' => 
    array (
      0 => '.\\templates\\editar.tpl',
      1 => 1393032927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318555307fe83bca148-80759797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5307fe83ceb285_54444157',
  'variables' => 
  array (
    'data' => 0,
    'hora' => 0,
    'nome' => 0,
    'cpf' => 0,
    'sala' => 0,
    'ramal' => 0,
    'email' => 0,
    'tipo' => 0,
    'descricao' => 0,
    'opcoes' => 0,
    'opcao' => 0,
    'id_situacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307fe83ceb285_54444157')) {function content_5307fe83ceb285_54444157($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title></title>
    </head>
    <body>
        <form method="POST" action="">
            Data de Abertura: <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<br/>
            Hora: <?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
<br/>
            Nome: <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
<br/>
            CPF: <?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
<br/>
            Número da Sala: <?php echo $_smarty_tpl->tpl_vars['sala']->value;?>
<br/>
            Ramal: <?php echo $_smarty_tpl->tpl_vars['ramal']->value;?>
<br/>
            E-mail: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br/>
            Tipo de chamado: <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
<br/>
            Descrição: <?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
<br/>
            Situação:
            <select name="situacao">
                <?php  $_smarty_tpl->tpl_vars['opcao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opcao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opcoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opcao']->key => $_smarty_tpl->tpl_vars['opcao']->value) {
$_smarty_tpl->tpl_vars['opcao']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['opcao']->value['id'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['opcao']->value['id']==$_smarty_tpl->tpl_vars['id_situacao']->value) {?>
                            selected
                        <?php }?>
                    ><?php echo $_smarty_tpl->tpl_vars['opcao']->value['nome'];?>
</option>
                <?php } ?>
            </select><br/>
            <input type="submit" value="Salvar"/>
        </form>
    </body>
</html><?php }} ?>
