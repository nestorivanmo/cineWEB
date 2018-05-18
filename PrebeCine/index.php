

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PrebeCine</title>
  <link href="https://fonts.googleapis.com/css?family=Creepster|Anton" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 

  <ul class="fly-in-text hidden">
            <li>P</li>
            <li>R</li>
            <li>E</li>
            <li>B</li>
            <li>E</li>
            <li>C</li>
            <li>I</li>
            <li>N</li>
            <li>E</li>
  </ul>

 <div class="cuadradoGrande fly-in-text">
  <a href="registration/login.php" id="entrar">Entrar</a>
  </div>

  


</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            
            $(function() {
                
                setTimeout(function() {
                    $('.fly-in-text').removeClass('hidden');
                }, 500);
                
            })();
            
        </script>
</html>