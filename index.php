<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
  </head>
  <body>
    <h1>IDADE</h1>
    <form action="teste.php" method="post">
        <p>nome</p>
        <input type="text" name="nome" />
        <br>
        <p>idaade:</p>
        <input type="text" name="idade"/>
        <br>
        <input type="submit" value="Enviar"/>
    </form>
      <hr>


      
<h1>COR PREFERIDA</h1>      
    <form action="teste2.php" method="get">
        <p>sua cor preferida:</p>
        <input type="text" name="cor"/>
        <input type="submit" value = "cor"/>
    </form>
<hr>


      
      <h1>NOTA ALUNO</h1>
      <form action="media.php" method="get">
        <p>primeiranota:</p>
        <input type="number" name="nota1"/>
        <p>segundanota:</p>
        <input type="number" name="nota2"/>
        <p>terceiranota:</p>
        <input type="number" name="nota3"/>
        <input type="submit" value = "Enviar"/>
    </form>
      <hr>
      
  </body>
</html>
 