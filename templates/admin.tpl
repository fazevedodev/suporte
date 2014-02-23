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
                {foreach from=$chamados key=i item=chamado}
                    <tr
                        {if $i%2==0}
                            class="par"
                        {else}
                            class="impar"
                        {/if}
                    >
                        <td
                            {if $chamado['situacao']|upper=="ABERTO"}
                                class="aberto"
                            {elseif $chamado['situacao']|upper=="EM ATENDIMENTO"}
                                class="atendimento"
                            {elseif $chamado['situacao']|upper=="FECHADO"}
                                class="fechado"
                            {/if}
                        >
                            <a href="chamado.php?ticket={$chamado['ticket']}">{$chamado['situacao']|lower|ucfirst}</a>
                        </td>
                        <td>{$chamado['data']}</td>
                        <td>{$chamado['hora']}</td>
                        <td>{$chamado['ticket']}</td>
                        <td>{$chamado['setor']}</td>
                        <td>{$chamado['tipo']}</td>
                        <td>{$chamado['nome']}</td>
                    </tr>
                {/foreach}
            </table>
        </div>
    </body>
</html>