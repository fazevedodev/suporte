<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/grid960/960_24_col.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/simpletabs.css" />
        <script type="text/javascript" src="js/simpletabs_1.3.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("tr.par").click(function() {
                    window.location.href = $(this).find("a").attr("href");
                });
                $("tr.impar").click(function() {
                    window.location.href = $(this).find("a").attr("href");
                });
            });
        </script>
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
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Ticket</th>
                            <th>Setor</th>
                            <th>Tipo</th>
                            <th>Nome</th>
                        </tr>
                        {foreach from=$abertos key=i item=chamado}
                            <tr
                                {if $i%2==0}
                                    class="par"
                                {else}
                                    class="impar"
                                {/if}
                            >
                                <td><a href="chamado.php?ticket={$chamado['ticket']}">{$chamado['data']}</a></td>
                                <td>{$chamado['hora']}</td>
                                <td>{$chamado['ticket']}</td>
                                <td>{$chamado['setor']}</td>
                                <td>{$chamado['tipo']}</td>
                                <td>{$chamado['nome']}</td>
                            </tr>
                        {/foreach}
                    </table>
                    {if isset($paginas_abertos)}
                        <div class="paginacao">
                            {foreach from=$paginas_abertos item=pagina}
                                <a href="admin.php?p={$pagina}">{$pagina}</a>
                            {/foreach}
                        </div>
                    {/if}
                </div>
                <div  class="simpleTabsContent">
                    <table class="admin">
                        <tr class="header">
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Ticket</th>
                            <th>Setor</th>
                            <th>Tipo</th>
                            <th>Nome</th>
                        </tr>
                        {foreach from=$atendimentos key=i item=chamado}
                            <tr
                                {if $i%2==0}
                                    class="par"
                                {else}
                                    class="impar"
                                {/if}
                            >
                                <td><a href="chamado.php?ticket={$chamado['ticket']}">{$chamado['data']}</a></td>
                                <td>{$chamado['hora']}</td>
                                <td>{$chamado['ticket']}</td>
                                <td>{$chamado['setor']}</td>
                                <td>{$chamado['tipo']}</td>
                                <td>{$chamado['nome']}</td>
                            </tr>
                        {/foreach}
                    </table>
                    {if isset($paginas_atendimento)}
                        <div class="paginacao">
                            {foreach from=$paginas_fechados item=pagina}
                                <a href="admin.php?p={$pagina}">{$pagina}</a>
                            {/foreach}
                        </div>
                    {/if}
                </div>
                <div  class="simpleTabsContent">
                    <table class="admin">
                        <tr class="header">
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Ticket</th>
                            <th>Setor</th>
                            <th>Tipo</th>
                            <th>Nome</th>
                        </tr>
                        {foreach from=$fechados key=i item=chamado}
                            <tr
                                {if $i%2==0}
                                    class="par"
                                {else}
                                    class="impar"
                                {/if}
                            >
                                <td><a href="chamado.php?ticket={$chamado['ticket']}">{$chamado['data']}</a></td>
                                <td>{$chamado['hora']}</td>
                                <td>{$chamado['ticket']}</td>
                                <td>{$chamado['setor']}</td>
                                <td>{$chamado['tipo']}</td>
                                <td>{$chamado['nome']}</td>
                            </tr>
                        {/foreach}
                    </table>
                    {if isset($paginas_fechados)}
                        <div class="paginacao">
                            {foreach from=$paginas_fechados item=pagina}
                                <a href="admin.php?p={$pagina}">{$pagina}</a>
                            {/foreach}
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </body>
</html>