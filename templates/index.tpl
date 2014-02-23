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
</html>