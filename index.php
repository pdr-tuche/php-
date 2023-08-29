<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="teste.php" method="post">
        nome: <input type="text" name="nome" /><br>
        idaade: <input type="text" name="idade"/><br>
        <input type="submit" value="Enviar"/>
    </form>

    <form action="teste2.php" method="get">
        sua cor preferida: <input type="text" name="cor"/>
        <input type="submit" value = "cor"/>
    </form>

      <h1>nota aluno</h1>
      <form action="media.php" method="get">
        primeiranota: <input type="number" name="nota1"/>
        segundanota: <input type="number" name="nota2"/>
          terceiranota: <input type="number" name="nota3"/>
        <input type="submit" value = "Enviar"/>
    </form>
  </body>
</html>