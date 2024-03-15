<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05</title>
</head>
<body>
<form action="verificar.php" method="POST">
        <fieldset>
        <table>
        <tr> 
           <td> Informe seu nome: </td>
           <td><input size="15" type="text" name="nome"></td>
          </tr><tr>
           <td><input size="15" type="radio" name="jokempo" value="Pedra">Pedra</td>
           <td><input size="15" type="radio" name="jokempo" value="Papel">Papel</td>
           <td><input size="15" type="radio" name="jokempo" value="Tesoura">Tesoura</td>
          </tr>
           <tr>
           <td><input size="15" type="submit" value="Jogar"></td>
          </tr>
          </table>
          </fieldset>
          </form>
</body>
</html>