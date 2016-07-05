<!DOCTYPE html>
<html lang="es" dir="rtl">
  <head>
	<style type="text/css">
		.body {
	        background: #E48989;
	        background-image: url('img/laravel_ignited.jpg');
	        background-repeat: no-repeat;
	        background-position: center top;
	        background-size: 100% auto;
	        border: 2px solid red;
			/*margin:0 auto;*/
			margin:1em 1em;
			border: 8px solid #EE5858;
			font-family:Verdana, Arial, Helvetica, sans-serif; 
			font-size:1em; 
		}

		.titulo1{
			color:#FFFFFF;
			text-align: center;
			font-weight:bold;
			font-size: 3em;
			line-height:3em;
			text-decoration:none; 
		}

		p{
			color:#FFFFFF;
			font-size: 1.7em;
			line-height:1.7em;
			text-decoration:none; 
			text-align: center;
		}

		.nombres{
			color:#FFFFFF;
			font-size: 1.2em;
			line-height:1.2em;
			text-decoration:none; 
			font-weight:bold;
		}

		.nombre_curso{
			color:#290808;
			font-size: 1.8em;
			font-weight:bold;
		}

		#footer {
			padding: 6em 0 0 0;
			text-align: center;
			color: #954545;
			font-size: 1em;
			line-height:1em;
			text-decoration:none; 
			text-align: center;
		}

			#footer .copyright {
				margin-top: 3em;
				text-align: center;
			}

			/* Copyright */

				#copyright {
					position: relative;
					text-align: center;
					padding: 1em 0em 1em 0em;
					color: inherit;
					opacity: 1;
					font-size: 1em;
					line-height: 1em;
					font-weight: bold;
				}

					#copyright a {
						text-decoration: none;
						color: #F14E4E;
					}

	</style>

  </head>
  	<body class="body">
  		<h1 class="titulo1">Certificado</h1>
  		<p>El presente certifica que <span class="nombres"><?php echo $name;?></span> aprobó satisfactoriamente el <span class="nombre_curso"><?php echo $course;?></span></p>
		<div id="footer">
		  	<img src="img/emprendeus_logo-small.png" width="150px" height="100px">

			<div id="copyright">
				Emprendeus   -   RIF: J-7894113215<br>
				Teléfono:&nbsp;&nbsp;+58 0424 7781384<br>
				<a href="mailto:info@emprendeus.com.ve" class="fa fa-envelope">&nbsp;info@emprendeus.com.ve</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="mailto:soporte@v.com.ve" class="fa fa-envelope">&nbsp;soporte@emprendeus.com.ve</a>
			</div>			
		</div>
  	</body>
  </html>
