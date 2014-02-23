<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                                    {foreach from=$setores item=setor}
                                        <option value="{$setor['id']}">{$setor['sigla']}</option>
                                    {/foreach}
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
                                    {foreach from=$tipos item=tipo}
                                        <option value="{$tipo['id']}">{$tipo['descricao']}</option>
                                    {/foreach}
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
</html>