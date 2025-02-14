<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="atv.css">
</head >

<body>
    <div class= "quadrado">

    <form action="atv.php" method="post">
    <label >Nome:</label >
    <input name="name" id="nome" type="text" required>

    <label>Idade:</label>
    <input name="age" id="age" type="number" required>
    
    <label> Telefone </label>
    <input name="telefone" id=telefone type="number"required>

    <Label>Email</Label>
    <input name=email type="text" id="email" required >

    <label>Endereço</label>
    <input name=endereço type="text" id="endereço" required>
    
    <lavel>Mensagem</label>
    <input name=mensagem type="text" id="mensagem"required> 
    
    <button type="submit">Enviar</button>
    </form> 
</div>
</html>