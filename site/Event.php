<!DOCTYPE html>
<html lang="en">
	<link rel="icon" href="images/page1_img6.png">

	<head>
		<title>MMA-ARG</title>
		<meta charset="utf-8">
		<?php include "includeMenus.php";?>
		
	</head>
	<body id="page3">
		
		<div class="main">
			<!-- header -->
			<header>
			
				<?php include "header.php"?>
				
				<script>
							function DoNav(id)
				  {
				  	
				  document.location.href = 'Peleador.php?id='+id;
				  }
	
				</script>
			</header>
			<div class="ic">
				More Website Templates at TemplateMonster.com!
			</div>
			<!-- / header -->
			<!-- content -->
			<section id="content">
				<div class="wrapper"> 
					<article class="col1" >
							<?php
							include "Abrir_conexion.php";
							$id = $_GET["id"];
							$result=mysql_query("SELECT * FROM `DF_Eventos` WHERE DF_idEvento = $id",
							$conexion);
							$row=mysql_fetch_row($result);
							echo"<h2>$row[2]</h2>
							<div class='pad'>
							</div>";
							$fecha = $row[3]; 
							$fecha = date("j/n/Y");
							//record
											
							echo "
							<div class='pad'>
								<br></br>
								<p><strong><span>F</span>Fecha:&nbsp; </strong> $fecha  </p>
								<p><strong><span>Lugar</span>eso: &nbsp;</strong>$row[6] &nbsp; - &nbsp;$row[5] &nbsp;- &nbsp;$row[4]  </p>
															
							</div>";
							
							echo"
							<table>
								<caption>Peleas</caption>
								
								<thead> <tr>
									<th><b> Peleadores </b></th><th><b>  Metodo</b></th><th><b> Round </b></th><th><b> Tiempo </b></th>
									</tr></thead>";
									
								$result=mysql_query("SELECT * FROM D_Peleas WHERE D_idEvento = $id",
								$conexion);
								while($row=mysql_fetch_row($result)){
									//Recupera Nombre contrincante
									$img1 = "images/Lose.jpg";
									$img2 = $img1;
									
										$peleador1= $row[4];
										//victoria vs Derrota
										if ( $row[8] == "1")
										{
											$img1 = "images/ok.jpg";											
										}
									
										$peleador2= $row[3];
										if ( $row[8] == "2")
										{
											$img2 = "images/ok.jpg";											
										}	
									
									$result2=mysql_query("SELECT `M_apellido`,`M_nombre` FROM `M_Peleadores` WHERE M_idPeleadores = '$peleador1' LIMIT 0, 30 ",
									$conexion);
									$row2=mysql_fetch_row($result2);
									$nombrePeleador1 = $row2[0] ." ".$row2[1];
									
									$result4=mysql_query("SELECT `M_apellido`,`M_nombre` FROM `M_Peleadores` WHERE M_idPeleadores = '$peleador2' LIMIT 0, 30 ",
									$conexion);
									$row3=mysql_fetch_row($result4);
									$nombrePeleador2 = $row3[0] ." ".$row3[1];
									
									$peleadores = "<img src= $img2 alt='' > 
													<a href= 'Peleador.php?id=$peleador1';>$nombrePeleador1 </a>  VS
													<img src= $img1 alt='' ><a href= 'Peleador.php?id=$peleador2';>$nombrePeleador2 " ;
									
								echo"
								<tr  >
									<td> $peleadores </td>	
									<td> $row[5]  </td><td>$row[6]  </td><td> $row[7]  </td></tr>";
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
				<?php include "footer.php"; ?>

	</footer>
			<!-- / footer -->
		</div>
		
		<?php include "Stack.php"; ?>

		
	</body>
</html>