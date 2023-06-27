<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de Curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
		<form action="insercao_curso.php" 
		      method="GET">
			<label for="id_curso">
			Nome do curso:
			</label>
			<input type="text" name="curso" id="id_curso">
			
            <br>
            
                        <label for="id_carga">
			Carga Horária:
			</label>
            <input type="number" name="carga" id="id_carga">
            <br>
            <label for ="id_data">
            Data de início:
            </label>
            <input type="date" name="data" id= "id_data">
        
			<br>
			<input type="submit" value="Ok">
		</form>
        <?php
                          include_once "../inc/conectabd.inc.php";
                          include "../inc/funcoes.inc.php";
                          
                          //monta_select_curso();
                        ?>
	</body>
</html>