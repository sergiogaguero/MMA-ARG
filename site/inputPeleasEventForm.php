<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="images/page1_img6.png">
	<head>
		<title>MMA-ARG</title>
		<meta charset="utf-8">
				<?php include "includeMenus.php";?>
				<script>
							function DoNav(id)
				  {
				  	
				  document.location.href = 'Peleador.php?id='+id;
				  }
	
				</script>

	</head>
	<body id="page3">
		<div class="main">
			<!-- header -->
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li>
								<a href="index.html"><span>M</span>MA-ARG</a>
							</li>
							<li>
								<a href="Novedades.html"><span>N</span>ovedades</a>
							</li>
							<li>
								<a href="Gallery.html"><span>G</span>aleria</a>
							</li>
							<li>
								<a href="/foro"><span>F</span>oro</a>
							</li>
							<li id="menu_active">
								<a href="ListaPeleadores.php"><span>Peleadores</span></a>
							</li>
						</ul>
					</nav>
				</div>
				<h1><a href="index.html" id="logo">DesignStudio.com</a></h1>
			</header>
			<div class="ic">
				More Website Templates at TemplateMonster.com!
			</div>
			<!-- / header -->
			<!-- content -->
			<section id="content">
				<div class="wrapper">
					
					<?php
					
									
					   //if ( $_REQUEST[boton] != "" )
					    //{
					      //if ($_REQUEST[Evento]!="")
					        
					        //echo "Peso Deficiente";
					        //elseif ($_REQUEST[Peso]>10 && $_REQUEST[Peso]<=20)
					        //  echo "Peso Normal";
					        //  else
					         //   echo "Excedido de Peso";
					   }
					   else
					   {
					 ?>
					 <FORM ACTION="inputPeleasEventForm.php" METHOD="POST">
					 Evento: <INPUT TYPE="TEXT" NAME="Evento" size="25"><Br>
					 Peleador nro1 Nombre: <INPUT TYPE="TEXT" NAME="1Nombre" size="25"><Br>
					 Peleador nro1 Apellido: <INPUT TYPE="TEXT" NAME="1Apellido" size="25"><Br>
					 Peleador nro2 Nombre: <INPUT TYPE="TEXT" NAME="2Nombre" size="25"><Br>
					 Peleador nro2 Apellido: <INPUT TYPE="TEXT" NAME="2Apellido" size="25"><Br>
					 Ganador: <INPUT TYPE="TEXT" NAME="Ganador" size="10"><Br>
					 Round: <INPUT TYPE="TEXT" NAME="Round" size="10"><Br>
					 Tiempo: <INPUT TYPE="TEXT" NAME="Round" size="10"><Br>
					 <Br>
					 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
					<SELECT name="minutos">
					<OPTION>01</OPTION>
					</SELECT> 


 
					</FORM>
					 <?php
					   }
					 ?>
					
					
					
				</div>
			</section>
			<!-- / content -->
			<!-- footer -->
			<footer>
				

	</footer>
			<!-- / footer -->
		</div>
		
		<?php include "Stack.php"; ?>

	</body>
</html>