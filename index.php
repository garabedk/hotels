<!DOCTYPE html>
<html>
  <head>
    <meta charset="ISO-8859-1">
    <title>Teste php</title> 
	<link rel="icon" type="image/x-icon" href="Hotel Ico.jpeg">
	<link rel="stylesheet" href="Estilo Hotel.css">
  </head>

 
<body > 

  <h2> <i>Ficha de Checkin </i> </h2> 
  <p> Favor preencher o formulário abaixo: </p>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET" >
    <fieldset>
	  <legend>Dados pessoais:</legend>
	  <label for="name">Nome:</label>
	  <input type="text" id="nome" name="nome"><br><br>
	  <label for="sobrenome">Sobrenome:</label>
	  <input type="text" id="sobrenome" name="sobrenome"><br><br>
	  Comentários:<br>
	  <textarea name="mensagem" rows="10" cols="30"></textarea>
	  </br>
	  <input type="submit" value="Encaminha">
	</fieldset>
  </form>

  <p id="demo"></p>

  <script>
    let query = location.search;
    if(query != "") document.getElementById("demo").innerHTML = "JavaScript: A consulta da URL é: " + query;
  </script>

  <?php  
         echo "Primeiro Script em ! PHP";
         echo $_SERVER['PHP_SELF']."</p>";
         echo $_SERVER['REQUEST_METHOD']."</p>";
	       echo $_SERVER['QUERY_STRING']."</p>";
	       echo $_SERVER['PHP_SELF']."</p>";
  ?>

  <?php  if($_SERVER['QUERY_STRING'] != "") {
		       echo "<p> O Nome: ". $_GET['nome']."</p>";
		       echo "<p> O Sobrenome: ". $_GET['sobrenome']."</p>";
		       echo "<p> O Nome: ". $_GET['mensagem']."</p>";	
	      }
  ?>

</body>
</html>
