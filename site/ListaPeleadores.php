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
					<article class="col1">
						<h2>Listado Peleadores</h2>
						<div class="pad">
							<form id="form_506601" class="appnitro"  method="post" action="/ListaPeleadores.php">
							<?php
							include "Abrir_conexion.php";
							$result=mysql_query("SELECT * FROM M_Peleadores ORDER BY M_idPeleadores",
							$conexion);
							echo"
							<table>
								<caption>Argentinos</caption>
								
								<thead> <tr>
									<th><b> Nro </b></th><th><b> Apellido </b></th><th><b> Apodo </b></th><th><b>  Nombre</b></th><th><b> Categoria </b></th><th><b> Peso </b></th><th><b> Altura </b></th>
								</tr></thead>";
								while($row=mysql_fetch_row($result)){
								echo"
								<tr onclick='DoNav($row[0])' >
									<td>$row[0]</td><td>$row[1]</td><td>&quot;$row[3]&quot; </td>		<td>$row[2]</td><td> $row[4]  </td><td>$row[5]  </td><td> $row[6]  </td>
								</tr>";
								}
								echo"
							</table>";
							include "Cerrar_conexion.php";
							?>
						</div>
					</article>
					
				</div>
			</section>
			<!-- / content -->
			<!-- footer -->
			<footer>
				<?php include "footer.php";?>

	</footer>
			<!-- / footer -->
		</div>
		
		<?php include "Stack.php"; ?>

	</body>
</html>