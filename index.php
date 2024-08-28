<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 2 php</title>
</head>
<body>

<form action="index.php" method="post">
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome"><br><br>
  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email"><br><br>
  <input type="submit" value="Enviar">

</form>

    <?php
    
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
  
    echo "Olá, $nome! Seu e-mail é $email.";
  
    ?>


</body>
</html>