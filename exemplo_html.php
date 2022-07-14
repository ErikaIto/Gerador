<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="language" content="PT-BR" />
    <title>CURRÍCULO</title>
    <link rel="stylesheet" href="modelo1.css" />
</head>  
    <h1 class="title">CURRÍCULO</h1>  

    <body>
    	<h2 class= "title">Dados</h2>
       
      
    	<p><?php echo $_POST['nome'] ?></p> 
    	<p><?php echo $_POST['endereco'] .','. $_POST['numero'] ?></p>
    	<p><?php echo $_POST['bairro'] ?></p>
    	<p><?php echo $_POST['cidade'] .','. $_POST['estado'] ?></p>
    	<p><?php echo $_POST['Cep'] ?></p>
    	<p><?php echo $_POST['fone'] ?></p>
    	<p><?php echo $_POST['cel'] ?></p>
    	<p><?php echo $_POST['email'] ?></p>
    	<p><?php echo $_POST['nacionalidade'] .','. $_POST['naturalidade'] ?></p>
    	<p><?php echo $_POST['sexo'] .','. $_POST['estado-civil'] ?></p>
    	<p><?php echo $_POST['idade'] ?></p>
    
         


	
    	<h2 class= "title">Formação Acadêmica</h2>
    	<ul>
    
    	        
    	<p><?php echo $_POST['escola'] ?></p>
    	<p><?php echo $_POST['cidade_escola'] ?></p>
    	<p><?php echo $_POST['estado_escola']?></p>
    	<p><?php echo $_POST['periodo'] ?></p>
    	<p><?php echo $_POST['escola_situacao'] ?></p>
    	

    	</ul>
    	<h2 class="title">Cursos</h2>
    	<ul>
    	<?php
    	echo ($_POST['escola_curso1']) .','. $_POST['curso1'];
    	?>
    	</ul>	

    	<h2 class="title">Empresas onde Trabalhou</h2>
		<ul>
		<?php
		echo ($_POST['empresa1']);
		echo ($_POST['cargo1']);
		?>
		</ul>	

		<h2 class="title">Qualificações</h2>
		<ul>
		<?php 
		echo ($_POST['qualificacao']);
		?>
		</ul>

		<br/>
    </body>	

</html>







