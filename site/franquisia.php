<!DOCTYPE html>
<html lang="en">
	<link rel="icon" href="images/page1_img6.png">

	<head>
		<title>MMA-ARG</title>
		<meta charset="utf-8">
		<?php include "includeMenus.php"; ?>
		<!-- [if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<style type="text/css">
		.bg {behavior:url(js/PIE.htc)}
		</style>
		<![endif]-->
		<!-- [if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>
		<![endif]-->
		<script type="text/javascript">
		
			function DoNav(id)
			  {
			  	
			  document.location.href = 'Event.php?id='+id;
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
				<h1><a href="index.html" id="logo"></a></h1>
			</header>
			
			<!-- / header -->
			<!-- content -->
			<section id="content">
				<div class="wrapper">
					<article class="col1" >
							<?php
							include "Abrir_conexion.php";
							$id = $_GET["id"];
							$result=mysql_query("SELECT * FROM `MF_Franquisias` WHERE MF_idFranquisia = '$id'",
							$conexion);
							$row=mysql_fetch_row($result);
							echo"<h2>$row[1]</h2>
								<br/>
								<div class='pad'> $row[2]<div>
								<br/>
							";
							//record
							/*
							echo"<table  width='400' cellspacing='0' cellpadding='2'>";
							foreach( $recordChar as $ElemArray ) {
							$porcentaje = round((( $ElemArray[1] / $maximo ) * 100),2);
							
							echo"<tr >
									<td  width='20%'><strong>$ElemArray[0]</strong></td>
									<td  width='10%'> $porcentaje </td>
									<td >
										<table width='$porcentaje' bgcolor= '$ElemArray[2]'>
										<tr ><td></td></tr>
										</table>
									</td>
								</tr>"; }
								
							echo"</table>"; */
							
							//fin tabla
							
							echo"
							<table>
								<caption>Eventos</caption>
								<thead> <tr>
									<th > <column><b> Nombre </b></column></th><th><b> Fecha</b></th><th><b> Lugar </b></th>
									</tr></thead>";
									
								$result=mysql_query("SELECT * FROM `DF_Eventos` WHERE DF_idFranquisia = '$id'",
								$conexion);
								while($row=mysql_fetch_row($result)){
									//Recupera Nombre contrincante
								
									
								echo"
								<tr onclick='DoNav($row[0])' >
									<td><a href= 'Event.php?id=$row[0]';>$row[2]</a></td><td>$row[3]</td><td>$row[4] &nbsp; $row[5] &nbsp;$row[6] &nbsp;</td>	
								</tr>";
								}
								echo"</table>";
								
								
							include "Cerrar_conexion.php";
							?>
						
						
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