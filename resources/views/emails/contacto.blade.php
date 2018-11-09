<!DOCTYPE html>
<html>
<head>
    <title>Mensaje enviado por TIIAEmpresa</title>
    <meta charset="utf-8">
    <style>
        body{
            width:510px;
            margin:0;
            padding:0 20px;
            font-family:"Raleway", sans-serif;
            font-size:12px;
        }
        h1{
            font-size:20px;
        }
        h2{
            font-size:16px;
        }
    </style>
</head>
<body>
<h1>
    Mensaje enviado por TIIA
</h1>
<hr>
<p>
    <strong>Nome:</strong> {{$nome}}<br>
    <strong>E-mail:</strong> {{$email}}<br>
    <strong>Nome:</strong> {{$phone}}<br>
    <strong>Mensagem:</strong><br> <?php echo nl2br($mensagem); ?>
</p> 
<hr>
<div>
    <p>
 
    </p>
</div>
</body>
</html>  