<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora Javascript</title>
        <script src="js/script.js" language="javascript">
        </script>
         <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body>
        <form name="calculadora">
            <table align="center" border="0">
                <tr align="center">
                    <th colspan="3"><input type="text" name="visor" id="visor" readonly="readonly"></th>
                    <th><button type="button" value="AC" onclick="AC()" class="calc"><b>AC</b></button></th>
                </tr>
                <tr align="center">
                    <td><button type="button" value="7" onclick="button(value)" class="numero"><b>7</b></button></td>
                    <td><button type="button" value="8" onclick="button(value)" class="numero"><b>8</b></button></td>
                    <td><button type="button" value="9" onclick="button(value)"class="numero"><b>9</b></button></td>
                    <td><button type="button" value="+" onclick="button(value)" class="calc"><b>+</b></button></td>
                </tr>
                <tr align="center">
                    <td><button type="button" value="4" onclick="button(value)" class="numero"><b>4</b></button></td>
                    <td><button type="button" value="5" onclick="button(value)" class="numero"><b>5</b></button></td>
                    <td><button type="button" value="6" onclick="button(value)" class="numero"><b>6</b></button></td>
                    <td><button type="button" value="-" onclick="button(value)" class="calc"><b>-</b></button></td>
                </tr>
                <tr align="center">
                    <td><button type="button" value="1" onclick="button(value)" class="numero"><b>1</b></button></td>
                    <td><button type="button" value="2" onclick="button(value)" class="numero"><b>2</b></button></td>
                    <td><button type="button" value="3" onclick="button(value)" class="numero"><b>3</b></button></td>
                    <td><button type="button" value="*" onclick="button(value)" class="calc"><b>*</b></button></td>
                </tr>
                <tr align="center">
                    <td><button type="button" value="0" onclick="button(value)" class="numero"><b>0</b></button></td>
                    <td><button type="button" value="." onclick="button(value)" class="numero"><b>.</b></button></td>
                    <td><button type="button" value="=" onclick="igual()" class="calc"><b>=</b></button></td>
                    <td><button type="button" value="/" onclick="button(value)" class="calc"><b>/</b></button></td>
                </tr>
            </table>
        </form>
    </body>
</html>