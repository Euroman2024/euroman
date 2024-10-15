<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Euroman</title>
	<link rel="stylesheet" href="./styles/inicio/inicio.css">
	<link rel="stylesheet" href="./styles/inicio/colors.css">
	<link rel="stylesheet" href="./styles/inicio/slidesInicio.css">
	<link rel="stylesheet" href="./styles/menu.css">
	<link rel="stylesheet" href="./styles/whatsapp.css">
	<link rel="stylesheet" href="./styles/repuestos/repuestosInicio.css">
	<link rel="stylesheet" href="./styles/inicio/inicioOriginal.css">

	<link rel="stylesheet" href="./styles/footer.css">
	<link rel="stylesheet" href="./styles/inicio/inicio6.css">
	<style>
		.loldivazul {
			display: flex;
			background-color: rgba(36, 59, 85, 1);
			height: 30%;
			border-bottom-right-radius: 20px;
			border-bottom-left-radius: 20px;
		}
	</style>

</head>

<body" class="cuerpo">
	<div class="background">
		<div class="bubble"></div>
		<div class="bubble"></div>
		<div class="bubble"></div>
		<div class="bubble"></div>

	</div>

	<div class="fondo">
		<?php include "./templates/menuinicio.php"; ?>

		<div style="margin-top:80px;" class="slider">
			<div class="list">
				<div class="item">
					<img src="./carpetaeuromanimagenes/inicio/manimage1.png" alt="">
				</div>
				<div class="item">
					<img src="./carpetaeuromanimagenes/inicio/imageslide.png" alt="">
				</div>
				<div class="item">
					<img style="object-fit: fill;" src="./carpetaeuromanimagenes/inicio/MAN5.jpg" alt="">
				</div>
			</div>
			<div class="buttons">
				<a class="ante" id="prev">&lt;</a>
				<a class="sigu" id="next">&gt;</a>
			</div>
			<ul class="dots">
				<li class="active"></li>
				<li></li>
				<li></li>

			</ul>
		</div>




		<div class="xdbody2" style="margin-bottom:20px;" id="divA">


			<div class="opciones">

				<div class="imagenini1" onclick="redirigiropcion1()" id="imagenNuevos">
					<img class="active" src="./carpetaeuromanimagenes/inicio/op1.jpeg" alt="nA">
					<img src="./carpetaeuromanimagenes/inicio/nuevosini2.jpg" alt="nA">
					<img src="./carpetaeuromanimagenes/inicio/nuevosEuroman3.jpg" alt="nA">

				</div>

				<div class="imagenini2" onclick="redirigiropcion2()" id="imagenSeminuevos">
					<img class="active" src="./carpetaeuromanimagenes/inicio/seminuevosini22.jpg" alt="nA">
					<img src="./carpetaeuromanimagenes/inicio/seminuevosini2.jpg" alt="Slide 2">
					<img src="./carpetaeuromanimagenes/inicio/seminuevosini3.jpg" alt="Slide 3">
				</div>


				<div class="imagenini3" onclick="redirigiropcion3()" id="imagenRepuestos">
					<img class="active" src="./carpetaeuromanimagenes/inicio/op33.jpg" alt="nA">
					<img src="./carpetaeuromanimagenes/inicio/opslide333.jpg" alt="Slide 5">


					<img src="./carpetaeuromanimagenes/inicio/opslide3.jpg" alt="Slide 2">
					<!--<img src="./carpetaeuromanimagenes/inicio/opslide33.jpg" alt="Slide 3">-->
				</div>
				<div class="imagenini4" onclick="redirigiropcion4()" id="imagenServicios">
					<img class="active" src="./carpetaeuromanimagenes/inicio/talleres.jpg" alt="nA">
					<img src="./carpetaeuromanimagenes/inicio/talleresEuroman1.jpg" alt="nA">
					<img src="./carpetaeuromanimagenes/inicio/talleresEuroman2.jpg" alt="nA">
				</div>
			</div>
			<div class="iconosxd">
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/camion.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">MAN TGS | SERIE 33.440</p>
					</div>
				</div>
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/camion.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">MAN TGA 33.480BBS</p>
					</div>
				</div>
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/piezaRepuesto.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">CABINA</p>
					</div>
				</div>
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/piezaRepuesto.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">REPARACIONES</p>
					</div>
				</div>
			</div>
			<div class="iconosxd">
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/camion.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">MAN TGS | SERIE 33.480</p>
					</div>
				</div>
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/camion.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">MAN TGS 33.480</p>
					</div>
				</div>
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/piezaRepuesto.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">MOTOR</p>
					</div>
				</div>
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/piezaRepuesto.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">SERVICIOS</p>
					</div>
				</div>
			</div>
			<div class="iconosxd">
				<div class="iconos-element" style="border:none;">
					<div class="iconos-element-dentro1">

					</div>
					<div class="iconos-element-dentro2">

					</div>
				</div>
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/camion.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">MAN TGA 33.480</p>
					</div>
				</div>
				<div class="iconos-element">
					<div class="iconos-element-dentro1">
						<img src="./carpetaeuromanimagenes/inicio/piezaRepuesto.png" alt="">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p">CHASIS</p>
					</div>
				</div>
				<div class="iconos-element" style="border:none;">
					<div class="iconos-element-dentro1">
					</div>
					<div class="iconos-element-dentro2">
						<p class="iconos-element-dentro2-p"></p>
					</div>
				</div>
			</div>


		</div>


		<div class="sectionOriginal3">
			<div class="sectionO31">
				<div class="element1">
					<p class="tittleRepuestos">REPUESTOS</p>

				</div>
			</div>
			<div class="sectionO32">
				<div class="element">
					<div class="subdiv">
						<img style="object-fit:fill;width:100%;height:100%;"
							src="./carpetaeuromanimagenes/inicio/motorini10.jpg" alt="">
					</div>
					<button id="motorBtn">ver</button>
				</div>
				<div class="element">
					<div class="subdiv">
						<img style="object-fit:fill;width:100%;height:100%;"
							src="./carpetaeuromanimagenes/inicio/cabinaini10.jpg" alt="">
					</div>
					<button id="cabinaBtn">ver</button>
				</div>
				<div class="element">
					<div class="subdiv">
						<img style="object-fit:fill;width:100%;height:100%;"
							src="./carpetaeuromanimagenes/inicio/chasisini10.jpg" alt="">
					</div>
					<button id="chasisBtn">ver</button>
				</div>
				<div class="element">
					<div class="subdiv">
						<img style="object-fit:fill;width:100%;height:100%;"
							src="./carpetaeuromanimagenes/inicio/transmisionini10.jpg" alt="">
					</div>
					<button id="transmisionBtn">ver</button>
				</div>
			</div>
			<div class="sectionO33 motorOrigen" id="motorDiv">
				<div class="catalogo">
					<p class="catalogo-white"> CATALOGO</p>
				</div>


				<div class="element2">
					<p>BLOCK - MOTOR</p>
				</div>
				<div class="lol" id="BLOCK - MOTOR1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/block-d2066.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Block<br>
								Tipo: D2066 / D2676
							</p>
						</div>

					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/block-d2866.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Block<br>
								Tipo: D2866 / D2876
							</p>
						</div>
					</div>
				</div>

				<div class="element2">
					<p>CULATA - CABEZOTES</p>
				</div>
				<div class="lol" id="CULATA - CABEZOTES1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/culata-d2066.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Culata<br>
								Tipo: D2066 / D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/culata-d2866.jpeg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Culata<br>
								Tipo: D2866 / D2876
							</p>
						</div>
					</div>
				</div>


				<div class="element2">
					<p>LUBRICACION - MOTOR</p>
				</div>
				<div class="lol" id="LUBRICACION - MOTOR1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/bombaAceite-d2066.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Bomba de Aceite<br>
								Tipo: D2066 / D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/bombaAceite-d2866.jpeg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Bomba de Aceite<br>
								Tipo: D2866 / D2876
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/enfriadorAceite-2066.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Enfriador de Aceite<br>
								Tipo: D2066 / D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/enfriadorAceite-2866.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Enfriador de Aceite<br>
								Tipo: D2866 / D2876
							</p>
						</div>
					</div>
				</div>



				<div class="element2">
					<p>SISTEMA DE REFRIGERACION</p>
				</div>
				<div class="lol" id="SISTEMA DE REFRIGERACION1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/carcasaBombaAgua-2066.PNG" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Carcasa bomba de agua<br>
								Tipo: D2066 / D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/bombaAgua-2066.png" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Bomba de agua<br>
								Tipo: D2066 / D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/bombaAgua-d2866.avif" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Bomba de agua<br>
								Tipo: D2866 / D2876
							</p>
						</div>
					</div>
				</div>



				<div class="element2">
					<p>MULTIPLE DE ADMISION Y ESCAPE</p>
				</div>
				<div class="lol" id="MULTIPLE DE ADMISION Y ESCAPE1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/filtroAire-2066.jpeg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Filtro de Aire<br>
								Tipo: D2066 / D2676
							</p>
						</div>
					</div>
					<!--<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo/filtroAire-2866.jpg" alt="">				
						<p>Descripcion<br>
						Nombre: Filtro de Aire<br>
						Tipo: D2866 / D2876							
						</p>
					</div>-->
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/multiplesEscape-d2066.jpeg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Multiple de Escape<br>
								Tipo: D20
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/multiplesEscape-d2866.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Multiple de Escape<br>
								Tipo: D28
							</p>
						</div>
					</div>

				</div>





				<div class="element2">
					<p>TURBOCOMPRESORES</p>
				</div>
				<div class="lol" id="TURBOCOMPRESORES1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/turboCompresores-d2066.avif" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Turbocompresor<br>
								Tipo: D2066/D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/turboCompresores-d2866.jpeg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Turbocompresor<br>
								Tipo: D2866/D2876
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/turboCompresor-k31.webp" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Turbocompresor<br>
								Tipo: K31
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/turboCompresor-k29.avif" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Turbocompresor<br>
								Tipo: K29
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/turboCompresor-k31.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Turbocompresor<br>
								Tipo: K31 (con valvula)
							</p>
						</div>
					</div>
				</div>





				<div class="element2">
					<p>SISTEMA DE COMBUSTIBLE</p>
				</div>
				<div class="lol" id="SISTEMA DE COMBUSTIBLE1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/inyector-d2066.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Inyectores<br>
								Tipo: D2066/D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/inyector-d2866.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Inyectores<br>
								Tipo: D2866/D2876
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/bombasInyeccion-d2066.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Bombas de inyeccion<br>
								Tipo: D2066/D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/bombasInyeccion-d2866.webp" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Bombas de inyeccion<br>
								Tipo: D2866/D2876
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/valvulaDosificadora-2066.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Valvula Dosificadora<br>
								Tipo: D2066/D2676
							</p>
						</div>
					</div>

					<!--<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo/inyector-d2866.jpg" alt="">				
						<p>Descripcion<br>
						Nombre: Valvula Dosificadora<br>
						Tipo: D2866/D2876				
						</p>
					</div>-->
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/filtroCombustible-2066.jpg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Filtro de Combustible<br>
								Tipo: D2066/D2676
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/catalogo2/filtroCombustible-2866.jpeg" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Filtro de Combustible<br>
								Tipo: D2866/D2676
							</p>
						</div>
					</div>
				</div>



				<div class="element2">
					<p>SISTEMA ELECTRICO</p>
				</div>
				<div class="lol" style="justify-content:center;" id="SISTEMA ELECTRICO1">
					<div class="loldiv2">
						<img src="./carpetaeuromanimagenes/inicio/sensores/sensores.png" alt="">
					</div>
				</div>



				<div class="element2">
					<p>EMBRAGUE</p>
				</div>
				<div class="lol" id="EMBRAGUE1">
					<div style="display:flex;width:90%;height:500px;background-color:white;margin:0 auto;margin-top:40px;margin-bottom:40px;border-radius:20px;">
						<img style="width:100%;height:100%;object-fit:cover;" src="./carpetaeuromanimagenes/inicio/catalogo2/embrague.png" alt="">
					</div>
				</div>




				<div class="element2">
					<p>PIEZAS ADOSADAS AL MOTOR</p>
				</div>
				<div class="lol" id="PIEZAS ADOSADAS AL MOTOR1">
					<div style="display:flex;width:90%;height:500px;background-color:white;margin:0 auto;margin-top:40px;margin-bottom:40px;border-radius:20px;">
						<img style="width:100%;height:100%;object-fit:fill;" src="./carpetaeuromanimagenes/inicio/catalogo2/piezasado.png" alt="">
					</div>
				</div>



			</div>
			<div class="sectionO33 cabinaOrigen" id="cabinaDiv">
				<div class="catalogo">
					<p class="catalogo-white"> CATALOGO</p>
				</div>
				<div class="element22">
					<p>ALSACRISTALES</p>
				</div>
				<div class="lol" id="ALSACRISTALES1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/cabina/alzacritstales.png" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Alzacristales <br>
								Tipo: TGA/TGS
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/cabina/ventanas.png" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Ventanas/Parabrisas<br>
								Tipo: TGA/TGS/LX/XL/XXL
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/cabina/mandos.png" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Mandos de Puera<br>
								Tipo: TGS/TGA
							</p>
						</div>
					</div>
				</div>
				<div class="element22">
					<p>ASIENTOS</p>
				</div>
				<div class="lol" id="ASIENTOS1">
					<div style="display:flex;width:90%;height:500px;background-color:white;margin:0 auto;margin-top:40px;margin-bottom:40px;border-radius:20px;">
						<img style="width:100%;height:100%;object-fit:fill;" src="./carpetaeuromanimagenes/inicio/cabina/asiento.jpg" alt="">
					</div>
				</div>
				<div class="element22">
					<p>ESPEJORETROVISORES</p>

				</div>
				<div class="lol" id="ESPEJORETROVISORES1">
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/cabina/espejoretrovisor.png" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Espejoretrovisores<br>
								Tipo: TGA
							</p>
						</div>
					</div>
					<div class="loldiv">
						<img src="./carpetaeuromanimagenes/inicio/cabina/espejoretrovisortgs.png" alt="">
						<div class="loldivazul">
							<p>Descripcion<br>
								Nombre: Espejoretrovisores<br>
								Tipo: TGS
							</p>
						</div>
					</div>
				</div>
				<div class="element2">
					<p>Repuesto - Cabina</p>
				</div>
				<div class="element2">
					<p>Repuesto - Cabina</p>
				</div>
				<div class="element2">
					<p>Repuesto - Cabina</p>

				</div>
				<div class="element2">
					<p>Repuesto - Cabina</p>

				</div>
				<div class="element2">
					<p>Repuesto - Cabina</p>
				</div>
			</div>
			<div class="sectionO33 chasisOrigen" id="chasisDiv">
				<div class="catalogo">
					<p class="catalogo-white">CATALOGO</p>
				</div>
				<div class="element2">
					<p>Repuesto - Chasis</p>
				</div>
				<div class="element2">
					<p>Repuesto - Chasis</p>

				</div>
				<div class="element2">
					<p>Repuesto - Chasis</p>

				</div>
				<div class="element2">
					<p>Repuesto - Chasis</p>
				</div>
				<div class="element2">
					<p>Repuesto - Chasis</p>
				</div>
				<div class="element2">
					<p>Repuesto - Chasis</p>

				</div>
				<div class="element2">
					<p>Repuesto - Chasis</p>

				</div>
				<div class="element2">
					<p>Repuesto - Chasis</p>
				</div>
			</div>
			<div class="sectionO33 transmisionOrigen" id="transmisionDiv">
				<div class="catalogo">
					<p class="catalogo-white"> CATALOGO</p>
				</div>
				<div class="element2">
					<p>Repuesto - Transmision</p>
				</div>
				<div class="element2">
					<p>Repuesto - Transmision</p>

				</div>
				<div class="element2">
					<p>Repuesto - Transmision</p>

				</div>
				<div class="element2">
					<p>Repuesto - Transmision</p>
				</div>
				<div class="element2">
					<p>Repuesto - Transmision</p>
				</div>
				<div class="element2">
					<p>Repuesto - Transmision</p>

				</div>
				<div class="element2">
					<p>Repuesto - Transmision</p>

				</div>
				<div class="element2">
					<p>Repuesto - Transmision</p>
				</div>
			</div>
			<button id="repuestosTbtn"
				style="margin:0 auto; width:20%;height:40px;margin-top:20px;color:white;line-height: normal;background-color:white;border:2px solid white;border-radius:10px;">
				<p class="repuestosTbtnP"> VER TODOS LOS REPUESTOS</p>
			</button>

		</div>
		<div style="display:flex;width:100%;height:50px;"></div>
		<div
			style="display:flex;width:100%;height:900px;background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url('./carpetaeuromanimagenes/inicio/MAN4.jpg') center fixed;background-attachment: scroll;background-size: 100% 120%;background-size: cover;">
			<div class="contactanos-container">
				<div
					style="display:flex;width:100%;height:10%;align-items:center;justify-content:center; margin-bottom: 0px;">
					<p
						style="background-color:rgba(36, 59, 85, 1);border-radius:5px; width:100%;max-width: 600px;text-align: center; padding:5px;color:white;font-size:20px;">
						CONTACTANOS</p>
				</div>
				<div class="form-container">
					<form action="https://formsubmit.co/db826c23c4f3ed1ad016941bdf7655b3" method="post">
						<label for="nombre">Nombre:</label>
						<input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required />
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" placeholder="Ingresa tu correo electronico"
							required />
						<label for="mensaje">Mensaje:</label>
						<textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Ingresa aqui tu mensaje "
							required></textarea>
						<input type="submit" value="Enviar">
					</form>
				</div>
				<div
					style="display:flex;width:100%;height:10%;align-items:center;justify-content:center; margin-bottom: 20px;">
					<p
						style="background-color:rgba(36, 59, 85, 1);border-radius:5px; width:100%;max-width: 600px;text-align: center; padding:5px;color:white;font-size:20px;">
						UBICACION</p>
				</div>
				<iframe style="margin-top:-40px;"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.916140398168!2d-78.58998612444155!3d-1.2184727987698987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d381fbaf691c2f%3A0x952658047d9b4617!2sEuroman%20-%20Repuestos%20y%20servicio%20t%C3%A9cnico%20MAN!5e0!3m2!1ses!2sec!4v1720811362175!5m2!1ses!2sec"
					width="62%" height="300px" style="border:0;margin:0 auto;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>

	</div>


	<?php include "./templates/footer.php"; ?>
	<?php include "./templates/whatsapp.php"; ?>

	<script src="./scripts/whatsapp.js"></script>
	<script src="./scripts/inicio/ubicacion.js"></script>
	<script src="./scripts/inicio/animated.js"></script>
	<script src="./scripts/inicio/redirecciones.js"></script>
	<!--<script src="./scripts/inicio/divocultar.js"></script>-->
	<script src="./scripts/inicio/slidesInicio.js"></script>
	<script src="./scripts/menu.js"></script>
	<script>
		let images = document.querySelectorAll('.imagenini3 img');
		let index = 0;

		setInterval(() => {
			images[index].classList.remove('active');
			index++;
			if (index >= images.length) {
				index = 0;
			}
			images[index].classList.add('active');
		}, 2000);



		let images2 = document.querySelectorAll('.imagenini2 img');
		let index2 = 0;

		setInterval(() => {
			images2[index2].classList.remove('active');
			index2++;
			if (index2 >= images2.length) {
				index2 = 0;
			}
			images2[index2].classList.add('active');
		}, 2000);

		let images3 = document.querySelectorAll('.imagenini1 img');
		let index3 = 0;

		setInterval(() => {
			images3[index3].classList.remove('active');
			index3++;
			if (index3 >= images3.length) {
				index3 = 0;
			}
			images3[index3].classList.add('active');
		}, 2000);

		let images4 = document.querySelectorAll('.imagenini4 img');
		let index4 = 0;

		setInterval(() => {
			images4[index4].classList.remove('active');
			index4++;
			if (index4 >= images4.length) {
				index4 = 0;
			}
			images4[index4].classList.add('active');
		}, 2000);
	</script>
	<script>
		var botonMotor = document.getElementById('motorBtn');
		var botonCabina = document.getElementById('cabinaBtn');
		var botonChasis = document.getElementById('chasisBtn');
		var botonTransmision = document.getElementById('transmisionBtn');
		/*document.getElementById('redirectButton').onclick = function () {
			window.location.href = './repuestos/repuestos.php';
		};*/

		document.getElementById('facebook').onclick = function() {
			window.location.href = 'https://www.facebook.com/euroman.ambato.1';
		};

		document.getElementById('tiktok').onclick = function() {
			window.location.href = 'https://www.tiktok.com/@euromanambato'; // Nota el 'https://'
		};

		document.getElementById('instagram').onclick = function() {
			window.location.href = 'https://www.instagram.com/euroman_ec/'; // Nota el 'https://'
		};

		document.getElementById('motorBtn').onclick = function() {
			if (document.getElementById('motorDiv').style.display == 'flex') {
				document.getElementById('motorDiv').style.display = 'none';
				botonMotor.innerHTML = 'ver';
			} else {
				document.getElementById('motorDiv').style.display = 'flex';
				botonMotor.innerHTML = 'ocultar';
				document.getElementById('cabinaDiv').style.display = 'none';
				botonCabina.innerHTML = 'ver';
				document.getElementById('chasisDiv').style.display = 'none';
				botonChasis.innerHTML = 'ver';
				document.getElementById('transmisionDiv').style.display = 'none';
				botonTransmision.innerHTML = 'ver';
			}
		};
		document.getElementById('cabinaBtn').onclick = function() {
			if (document.getElementById('cabinaDiv').style.display == 'flex') {
				document.getElementById('cabinaDiv').style.display = 'none';
				botonCabina.innerHTML = 'ver';
			} else {
				document.getElementById('motorDiv').style.display = 'none';
				botonMotor.innerHTML = 'ver';
				document.getElementById('cabinaDiv').style.display = 'flex';
				botonCabina.innerHTML = 'ocultar';
				document.getElementById('chasisDiv').style.display = 'none';
				botonChasis.innerHTML = 'ver';
				document.getElementById('transmisionDiv').style.display = 'none';
				botonTransmision.innerHTML = 'ver';
			}
		};
		document.getElementById('chasisBtn').onclick = function() {
			if (document.getElementById('chasisDiv').style.display == 'flex') {
				document.getElementById('chasisDiv').style.display = 'none';
				botonChasis.innerHTML = 'ver';
			} else {
				document.getElementById('motorDiv').style.display = 'none';
				botonMotor.innerHTML = 'ver';
				document.getElementById('cabinaDiv').style.display = 'none';
				botonCabina.innerHTML = 'ver';
				document.getElementById('chasisDiv').style.display = 'flex';
				botonChasis.innerHTML = 'ocultar';
				document.getElementById('transmisionDiv').style.display = 'none';
				botonTransmision.innerHTML = 'ver';
			}
		};
		document.getElementById('transmisionBtn').onclick = function() {
			if (document.getElementById('transmisionDiv').style.display == 'flex') {
				document.getElementById('transmisionDiv').style.display = 'none';
				botonTransmision.innerHTML = 'ver';
			} else {
				document.getElementById('motorDiv').style.display = 'none';
				botonMotor.innerHTML = 'ver';
				document.getElementById('cabinaDiv').style.display = 'none';
				botonCabina.innerHTML = 'ver';
				document.getElementById('chasisDiv').style.display = 'none';
				botonChasis.innerHTML = 'ver';
				document.getElementById('transmisionDiv').style.display = 'flex';
				botonTransmision.innerHTML = 'ocultar';
			}
		};
		document.getElementById('repuestosTbtn').onclick = function() {
			window.location.href = './repuestos/repuestos.php';
		};




		let motorOpciones = document.querySelectorAll('.element2');
		let motorOpciones2 = document.querySelectorAll('.element22');

		// Array con diferentes valores de clip-path
		const clipPaths = [
			'polygon(10% 0, 14% 0, 14% 4%, 100% 4%, 100% 100%, 0 100%, 0 61%, 0 46%, 0 4%, 10% 4%)', // Rectángulo
			'polygon(34% 0, 38% 0, 38% 4%, 100% 4%, 100% 100%, 0 100%, 0 61%, 0 46%, 0 4%, 34% 4%)', // Rombo
			'polygon(58% 0, 62% 0, 62% 4%, 100% 4%, 100% 100%, 0 100%, 0 61%, 0 46%, 0 4%, 58% 4%)', // Triángulo
			'polygon(84% 0, 88% 0, 88% 4%, 100% 4%, 100% 100%, 0 100%, 0 61%, 0 46%, 0 4%, 84% 4%)' // Círculo
		];

		motorOpciones.forEach((mottor, index) => {
			mottor.addEventListener("click", function() {
				let motorP = this.querySelector('p');
				let block = document.getElementById(motorP.innerText + '1');

				if (block) {
					// Asigna un clip-path al block basado en el índice
					block.style.clipPath = clipPaths[index % clipPaths.length];

					let blockState = block.style.display;

					// Oculta todos los demás blocks
					motorOpciones.forEach(otherMotor => {
						let otherMotorP = otherMotor.querySelector('p');
						let otherBlock = document.getElementById(otherMotorP.innerText + '1');
						if (otherBlock) {
							otherBlock.style.display = 'none';
						}
					});

					// Muestra/oculta el block actual
					block.style.display = blockState;
					if (block.style.display === 'flex') {
						block.style.display = 'none';
						console.log("desaparezco");
					} else {
						block.style.display = 'flex';
						console.log("aparezco");
					}
				} else {
					console.log('El elemento con id ' + motorP.innerText + ' no existe');
				}
			});
		});



		motorOpciones2.forEach((mottor, index) => {
			mottor.addEventListener("click", function() {
				let motorP = this.querySelector('p');
				let block = document.getElementById(motorP.innerText + '1');

				if (block) {
					// Asigna un clip-path al block basado en el índice
					block.style.clipPath = clipPaths[index % clipPaths.length];

					let blockState = block.style.display;

					// Oculta todos los demás blocks
					motorOpciones2.forEach(otherMotor => {
						let otherMotorP = otherMotor.querySelector('p');
						let otherBlock = document.getElementById(otherMotorP.innerText + '1');
						if (otherBlock) {
							otherBlock.style.display = 'none';
						}
					});

					// Muestra/oculta el block actual
					block.style.display = blockState;
					if (block.style.display === 'flex') {
						block.style.display = 'none';
						console.log("desaparezco");
					} else {
						block.style.display = 'flex';
						console.log("aparezco");
					}
				} else {
					console.log('El elemento con id ' + motorP.innerText + ' no existe');
				}
			});
		});
	</script>

	<!--<script src="./scripts/repuestos/all_inicio_repuestos.js"></script>-->
	</body>

</html>