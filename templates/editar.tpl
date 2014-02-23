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
            <form method="POST" action="">
                Data de Abertura: {$data}<br/>
                Hora: {$hora}<br/>
                Nome: {$nome}<br/>
                CPF: {$cpf}<br/>
                Número da Sala: {$sala}<br/>
                Ramal: {$ramal}<br/>
                E-mail: {$email}<br/>
                Tipo de chamado: {$tipo}<br/>
                Descrição: {$descricao}<br/>
                Situação:
                <select name="situacao">
                    {foreach from=$opcoes item=opcao}
                        <option value="{$opcao['id']}"
                            {if $opcao['id']==$id_situacao}
                                selected
                            {/if}
                        >{$opcao['nome']}</option>
                    {/foreach}
                </select><br/>
                <input type="submit" value="Salvar"/>
            </form>
        </div>
    </body>
</html>