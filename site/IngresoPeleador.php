<!DOCTYPE html>
<html lang="en">
	<link rel="icon" href="images/page1_img6.png">

	<head>
		<title>MMA-ARG</title>
		<meta charset="utf-8">
		<?php include "includeMenus.php";?>
		<link rel="stylesheet" href="demos.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/view.js"></script>
		<script src="../libraries/RGraph.common.core.js" ></script>
		<script src="../libraries/RGraph.hbar.js" ></script>
		<script src="/libraries/RGraph.common.dynamic.js" ></script>
		<script src="/libraries/RGraph.common.tooltips.js" ></script>
		<script src="/libraries/RGraph.common.effects.js" ></script>
		<script type="text/javascript" src="js/calendar.js"></script>
		
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
							
							include "Cerrar_conexion.php";
							?>
							
							<form id="form_505924" class="appnitro"  method="post" enctype="multipart/form-data" action="insertFigth.php">
								<div class="form_description">
									<h2>Ingreso Peleadores</h2>
									<p>Ingresar los datos completos del peleador a dar de alta en nuestras bases de datos.</p>
								</div>						
									<ul >
									
											<li id="li_2" >
								<label class="description" for="element_2">Nombre y Apellido </label>
								<span>
									<input id="element_2_1" name= "First" class="element text" maxlength="255" size="8" value=""/>
									<label>First</label>
								</span>
								<span>
									<input id="element_2_2" name= "Last" class="element text" maxlength="255" size="14" value=""/>
									<label>Last</label>
								</span> 
								</li>		<li id="li_3" >
								<label class="description" for="element_3">Apodo </label>
								<div>
									<input id="element_3" name="Apodo" class="element text medium" type="text" maxlength="255" value=""/> 
								</div> 
								</li>		<li id="li_8" >
								<label class="description" for="Categoria">Categoria </label>
								<div>
								<select class="element select medium" id="Categoria" name="Categoria"> 
									<option value="" selected="selected"></option>
									<option value="Pluma" >Pluma</option>
									<option value="Ligero" >Ligero</option>
									<option value="Welter" >Welter</option>
									<option value="Mediano" >Mediano</option>
									<option value="Semi Pesado" >Semi Pesado</option>
									<option value="Pesado" >Pesado</option>

								</select>
								</div> 
								</li>		<li id="li_1" >
								<label class="description" for="Peso">Peso </label>
								<div>
									<input id="Peso" name="Peso" class="element text medium" type="text" maxlength="255" value=""/> 
								</div> 
								</li>		<li id="li_4" >
								<label class="description" for="Altura">Altura </label>
								<div>
									<input id="Altura" name="Altura" class="element text medium" type="text" maxlength="255" value=""/> 
								</div> 
								</li>		<li id="li_5" >
								<label class="description" for="Academia">Academia </label>
								<div>
									<input id="Academia" name="Academia" class="element text medium" type="text" maxlength="255" value=""/> 
								</div> 
								</li>		<li id="li_6" >
								<label class="description" for="Pais">Pais </label>
								<div>
									<input id="Pais" name="Pais" class="element text medium" type="text" maxlength="255" value=""/> 
								</div> 
								</li>		<li id="li_7" >
								<label class="description" for="Provincia">Provincia </label>
								<div>
									<input id="Provincia" name="Provincia" class="element text medium" type="text" maxlength="255" value=""/> 
								</div> 
								</li>		<li id="li_8" >
								<label class="mail" for="Email">Email </label>
								<div>
									<input id="Email" name="Email" class="element text medium" type="text" maxlength="255" value=""/> 
								</div>  <li id="li_9" >
										<label class="description" for="Date">Date </label>
										<span>
                                            <input type="date" name="bday">
                                        </span>
                                        <span>
											<input id="dia" name="dia" class="element text" size="2" maxlength="2" value="" type="text"> /
											<label for="dia">DD</label>
										</span>
										<span>
											<input id="mes" name="mes" class="element text" size="2" maxlength="2" value="" type="text"> /
											<label for="mes">MM</label>
										</span>
										<span>
									 		<input id="anio" name="anio" class="element text" size="4" maxlength="4" value="" type="text">
											<label for="anio">YYYY</label>
										</span>
									
										<span id="calendar_9">
											<img id="cal_img_9" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
										</span>
										<script type="text/javascript">
											Calendar.setup({
											inputField	 : "element_9_3",
											baseField    : "element_9",
											displayArea  : "calendar_9",
											button		 : "cal_img_9",
											ifFormat	 : "%B %e, %Y",
											onSelect	 : selectEuropeDate
											});
										</script>
									<li id="li_10" >
										<label class="description" for="foto">Cargar Foto Peleador </label>
										<div>
											<input id="foto" name="foto" class="element file" type="file"/> 
											<input name="action" type="hidden" value="upload" />
										</div>
									</li>
									<br>
									<br>
									<li class="buttons">
									    <input type="hidden" name="form_id" value="505924" />
									    
										<input id="saveForm" class="button_text" type="submit" name="submit" value="GUARDAR" />
									</li>
								
									</ul>
								</form>	
								
							
						
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