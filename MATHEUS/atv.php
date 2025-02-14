<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   
   if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $Nome =($_POST['name']);
    $Idade=($_POST['age']);
    $Endereço =($_POST['endereço']);
    $Email=($_POST['email']);
    $Telefone=($_POST['telefone']);
     $Menssagem  =($_POST['mensagem']);

     echo $Nome;
     echo $Idade;
     echo $Endereço;
     echo $Email;
     echo $Telefone;
     echo $Menssagem;
   }else{
    echo "Acesso negado";

   }
   
   ?>
  
</body>
</html>