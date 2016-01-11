<!DOCTYPE html>
<html lang="en">
	<link rel="icon" href="images/page1_img6.png">

	<head>
		<title>MMA-ARG</title>
		<meta charset="utf-8">
		<?php include "includeMenus.php";?>
		<link rel="stylesheet" href="demos.css" type="text/css" media="screen" />
    
		<script src="../libraries/RGraph.common.core.js" ></script>
		<script src="../libraries/RGraph.hbar.js" ></script>
		<script src="/libraries/RGraph.common.dynamic.js" ></script>
		<script src="/libraries/RGraph.common.tooltips.js" ></script>
		<script src="/libraries/RGraph.common.effects.js" ></script>
		
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
							$result=mysql_query("SELECT * FROM M_Peleadores WHERE M_idPeleadores ='$id'",
							$conexion);
							$row=mysql_fetch_row($result);
							echo"<h2>$row[2] &quot;$row[3]&quot; $row[1]</h2>
							<div class='pad'>
							</div>";
							$fecha = $row[7]; 
							$fecha = date("j/n/Y");
							//record
							/*
							$recordChar = array(
									array( "Ganadas", 160, "#BDDA4C"),
									array( "Perdidas", 220, "#FF9A68"),
									array( "Empates", 80, "#69ABBF")
							);
							$maximo = 0;
							foreach ( $recordChar as $ElemArray ) { $maximo += $ElemArray[1]; }

							*/
							$Ganadas = 0;
							$Empates=0;
							$Perdidas = 0;
							
							$row1=mysql_fetch_row(mysql_query("SELECT count(*) FROM D_Peleas WHERE (D_peleador2 ='$id' and D_resultado = '2')
																	or (D_peleador1 ='$id' and D_resultado = 1)",$conexion));
							$Ganadas = $row1[0];
							
							$row1=mysql_fetch_row(mysql_query("SELECT count(*) FROM D_Peleas WHERE (D_peleador2 ='$id' and D_resultado = '1')
																	or (D_peleador1 ='$id' and D_resultado = 2)",$conexion));
							$Perdidas = $row1[0];
							
							$row1= mysql_fetch_row(mysql_query("SELECT count(*) FROM D_Peleas WHERE (D_peleador2 ='$id' 
																	or D_peleador1 ='$id') and D_resultado = 3 ",$conexion));
							$Empates = $row1[0];
							
						
							if (file_exists("images/Peleadores/$id.jpg")){
								$img = "/images/Peleadores/$id.jpg";
							}else
							{
								$img = "/images/Peleadores/Gen1.jpg";
							}
							
							echo "
							<div class='pad'>
								<br></br>
								<div class='borde-redondeado'>
								<div class='wrapper img1'>
									

										<figure><img src= $img alt='Peleador MMA ARG' ></figure>
										
										<br></br>
										<p><strong><span>N</span>acimieto : </strong> $fecha  </p>
										<p><strong><span>P</span>eso      : </strong>  	$row[5] Kg.</p>
										<p><strong><span>A</span>ltura    : </strong> 	$row[6] Mts.</p>
										<p><strong><span>C</span>lase     : </strong>  	$row[4]</p>
										<p><strong><span>R</span>ecord     : </strong> $Ganadas - $Perdidas - $Empates </p>
										
									
									<br></br>
										<br></br>
								</div>
								</div>
								
								<canvas id='cvs' width='500' height='130'>[No canvas support]</canvas>
    
								<script>
									window.onload = function ()
									{
										var hbar = new RGraph.HBar('cvs', [$Ganadas,$Perdidas,$Empates]);
										hbar.Set('chart.labels', ['Ganadas','Perdidas','Empates']);
										hbar.Set('chart.colors', ['#ffcc00','ff3300','ff9900']);
										hbar.Set('chart.strokestyle', 'transparent');
							            hbar.Set('chart.labels.above', true );
										hbar.Set('chart.text.font', 'Bangers');
										hbar.Set('chart.text.size', '12');
										hbar.Set('chart.colors.sequential', true);
										hbar.Set('chart.title.font', 'Bangers');
										hbar.Set('chart.title', 'Estadisticas');
										hbar.Set('chart.shadow', true);
										
										
										if (!RGraph.isOld()) {
										hbar.Set('chart.tooltips', ['Peleas Ganadas','Peleas Perdidas','Peleas Empatadas']);
										hbar.Set('chart.tooltips.event', 'onmousemove');
										}
										
										hbar.Set('chart.labels.above.decimals', 1);
										hbar.Set('chart.xlabels', false);
										hbar.Set('chart.gutter.left', 100);
										hbar.Set('chart.gutter.right', 50);
										hbar.Set('chart.gutter.top', 25);
										hbar.Set('chart.noxaxis', true);
										hbar.Set('chart.noxtickmarks', true);							           
							            hbar.Set('chart.background.grid', true)
										RGraph.isOld() ? hbar.Draw() : RGraph.Effects.HBar.Grow(hbar);
									}
								</script>

								<p>
									
								</p>
								
							</div>";
							
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
								<caption>Historial de Peleas</caption>
								
								<thead> <tr>
									<th><b> Rdo</b></th><th><b> Peleador </b></th><th><b> Evento </b></th><th><b>  Metodo</b></th><th><b> Tiempo </b></th><th><b> Round </b></th>
									</tr></thead>";
									
								$result=mysql_query("SELECT * FROM D_Peleas WHERE D_peleador2 ='$id' or D_peleador1 ='$id'",
								$conexion);
								
								while($row=mysql_fetch_row($result)){
									//Recupera Nombre contrincante
									$img = "images/Lose.jpg";
									if ($row[3]== $id) {
										$peleador= $row[4];
										//victoria vs Derrota
										if ( $row[8] == "1")
										{
											$img = "images/ok.jpg";											
										}
									}else
									{
										$peleador= $row[3];
										if ( $row[8] == "2")
										{
											$img = "images/ok.jpg";											
										}
									}
									$result2=mysql_query("SELECT `M_apellido`,`M_nombre` FROM `M_Peleadores` WHERE M_idPeleadores = '$peleador' LIMIT 0, 30 ",
									$conexion);
									$row2=mysql_fetch_row($result2);
									$nombrePeleador = $row2[0] ." ".$row2[1];
									
									$eventId = $row[1];
									//Nombre Evento
									$result3=mysql_query("SELECT `DF_NombreEvento`,`DF_FechaEvento` FROM `DF_Eventos` WHERE DF_idEvento = '$eventId' ",
									$conexion);
									$row3=mysql_fetch_row($result3);
									$nombreEvento = $row3[0];
									
									
									
									
									
								echo"
								<tr  >
									<td><img src= $img alt='' ></td><td><a href= 'Peleador.php?id=$peleador';>$nombrePeleador</a></td><td><a href= 'Event.php?id=$eventId';>&quot;$nombreEvento&quot;</a> </td>	<td> $row[5]  </td><td>$row[7]  </td><td> $row[6]  </td>
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
				<?php include "footer.php"; ?>

	</footer>
			<!-- / footer -->
		</div>
		
		<?php include "Stack.php"; ?>

		
	</body>
</html>