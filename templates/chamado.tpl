<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                            {if $situacao|upper=="ABERTO"}
                                class="destaque-aberto"
                            {elseif $situacao|upper=="EM ATENDIMENTO"}
                                class="destaque-atendimento"
                            {elseif $situacao|upper=="FECHADO"}
                                class="destaque-fechado"
                            {/if}>
                            {$situacao|upper}
                        </div>
                    </td>
                </tr>
                {if isset($admin) && $admin==true}
                    <tr>
                        <td colspan="3">
                            <div class="rotulo">
                                Nova situação
                            </div>
                            <div class="valor">
                                <form method="POST" action="">
                                    <select name="nova_situacao">
                                        {foreach from=$opcoes item=opcao}
                                            <option value="{$opcao['id']}">{$opcao['nome']}</option>
                                        {/foreach}
                                    </select>
                                    <input type="submit" value="Salvar"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                {/if}
                {if isset($ticket)}
                    <tr>
                        <td colspan="3" style="text-align:center;">
                            <div class="rotulo">Número do Ticket</div>
                            <div class="valor">
                                {$ticket|upper}
                            </div>
                        </td>
                    </tr>
                {/if}
                <tr>
                    <td><div class="rotulo">Nome</div><div class="valor">{$nome}</div></td>
                    <td><div class="rotulo">CPF</div><div class="valor">{$cpf}</div></td>
                    <td><div class="rotulo">Data de Abertura</div><div class="valor">{$data}</div></td>
                </tr>
                <tr>
                    <td><div class="rotulo">Sala</div><div class="valor">{$sala}</div></td>
                    <td><div class="rotulo">Ramal</div><div class="valor">{$ramal}</div></td>
                    <td><div class="rotulo">Hora da Abertura</div><div class="valor">{$hora}</div></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="rotulo">E-mail</div><div class="valor">{$email}</div>
                    </td>
                    <td>
                        <div class="rotulo">Setor</div><div class="valor">{$setor}</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><div class="rotulo">Tipo de Chamado</div><div class="valor">{$tipo}</div></td>
                </tr>
                <tr>
                    <td colspan="3"><div class="rotulo">Descrição</div><div class="valor">{$descricao}</div></td>
                </tr>
            </table>
        </div>
    </body>
</html>
