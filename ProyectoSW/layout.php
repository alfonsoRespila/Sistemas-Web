<?php
if(isset($_GET["correo"])){
		$correo=$_GET['correo'];
}
else{
$correo=0;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="Registrar.php" id='REG'>Registrarse</a></span>
      	<span class="right"><a href="Login.php" id='IN'>Login</a></span>
      	<span class="right"><a href="Logout.php" id='OUT'>Logout</a></span>
      	<span class="right"><a  id='NOM'> <?php echo ("$correo"); ?> </a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href=" ">Inicio</a></spam>
		<span><a href='creditos.html'id= 'Creditos'>Creditos</a></spam>
		<span><a href='<?php echo("GestionarPreguntas.php?correo=$correo"); ?>' id= 'pregunta'>Gestionar Preguntas</a></spam>  
	</nav>
    <section class="main" id="s1">
    
	<div id='capa'>
	
	</div>
    </section>
	<footer class='main' id='f1'>
		<a href='https://github.com/alfonsoRespila/Sistemas-Web/tree/origin'>Link GITHUB</a>
	</footer>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>

	 $("#pregunta").click(function(){
     	alapregunta();
     	return false;
       });
     
     function alapregunta(){
		$('#capa').load($("#pregunta").attr("href"));
	}

	 $("#Creditos").click(function(){
     	aloscreditos();
     	return false;
     });
 
     function aloscreditos(){
		$('#capa').load($("#Creditos").attr("href"));
	}

	 $("#Vpregunta").click(function(){
     	averpreguntas();
     	return false;
       });
     
     function averpreguntas(){
		$('#capa').load($("#Vpregunta").attr("href"));
	}

	$("#REG").click(function(){
     	areg();
     	return false;
       });
     
     function areg(){
		$('#capa').load($("#REG").attr("href"));
	}


	$("#IN").click(function(){
     	ain();
     	return false;
       });
     
     function ain(){
		$('#capa').load($("#IN").attr("href"));
	}

	$("#OUT").click(function(){
     	aout();
     	return false;
       });
     
     function aout(){
		$('#capa').load($("#OUT").attr("href"));
	}

		params = (new URL(document.location.href)).searchParams;
		$op = params.get("op"); 
		if($op=="usuario"){
			 alert ('BIENVENIDO');
			document.getElementById("IN").style="display:none;";
			document.getElementById("OUT").style="display:block;";
			document.getElementById("pregunta").style="display:block;";
			document.getElementById("REG").style="display:none;";
			document.getElementById("NOM").style="display:block;";
		}
		else{
			document.getElementById("OUT").style="display:none;";
			document.getElementById("NOM").style="display:none;";
			document.getElementById("pregunta").style="display:none;";
			document.getElementById("IN").style="display:block;"
			document.getElementById("REG").style="display:block;"
		}
	</script>
</body>
</html>
