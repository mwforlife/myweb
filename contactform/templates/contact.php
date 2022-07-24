<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        .contenedor{
            width: 90%;
            max-width: 720px;
            margin: 0 auto;
        }
        .saludo{
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="contenedor">
       <div class="row">
           <div class="col d-flex justify-content-between align-items-center">
                <img src="https://www.wilkenstech.com/img/logo/Logo.png" width="120" alt="">
                <p class="saludo">
                    Hola, Wilkens
                </p>
               
           </div>
       </div>
       
       <div class="row">
           <div class="col">
               <div class="h3 text-center">Mensaje desde la Web</div>
           </div>
       </div>
       
       <div class="row">
           <div class="col">
               <label for="">Nombre:{FROM_NAME}</label><br/>
               <label for="">Correo: <a href="mailto:{EMAIL_FROM}">{EMAIL_FROM}</a> </label><br/>
               <label for="">Asunto: {ASUNTO}</label>
           </div>
       </div>
       
       <div class="row">
           <div class="col">
               {MESSAGE}
           </div>
       </div>
       
    </div>
</body>
</html>