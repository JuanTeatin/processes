<?php
	class controlador {
		function head($a) {
			$directorio = '';
			if ($a == 'interno') {
				$directorio = '../'; 
			}
			?>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				<link rel="shortcut icon" href="<?php echo $directorio; ?>almacenamiento/img/favicon.png">
				<link rel="stylesheet" href="<?php echo $directorio; ?>librerias/materialize/css/materialize.min.css">
				<link rel="stylesheet" href="<?php echo $directorio; ?>librerias/socicon/socicon.css">
				<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
				<link rel="stylesheet" href="<?php echo $directorio; ?>css/completos/index.css?id=<?php echo date('dmYHis'); ?>">
				<link rel="stylesheet" href="<?php echo $directorio; ?>css/completos/media_queries.css?id=<?php echo date('dmYHis'); ?>">
				<link rel="stylesheet" href="<?php echo $directorio; ?>css/completos/style.css">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CustomEase.min.js"></script>
				

			<?php
		}
		function menu($a) {
			$directorio = '';
			if ($a == 'interno') {
				$directorio = '../';
			}
			?>
				<nav style="height: 120px; position: fixed; top: 0; z-index: 2;" class="grey lighten-4 footer navbar-menu">
				    <div class="container" style="position: relative;">
				        <div class="nav-wrapper">
				            <a href="<?php echo $directorio; ?>index.php" class="brand-logo"><img class="brand-logo" src="<?php echo $directorio; ?>almacenamiento/img/logoda.png" height="110px" style="padding: 0px;"></a>
				            <a href="#" data-target="mobile-demo" class="sidenav-trigger sub-titulo"><i class="material-icons">menu</i></a>
				            <div class="hide-on-med-and-down" style="line-height: 0;position: absolute;right: 0;top: 0;width: 108px;">
				            	
				            </div>
				            <ul class="hide-on-med-and-down" style="bottom: -90px;position: absolute;right: -120px;">
				                <li><a class="sub-titulo" href="<?php echo $directorio; ?>index.php"><b style="font-weight: 500;">Inicio</b></a></li>
								<li><a class="sub-titulo" href="<?php echo $directorio; ?>index.php"><b style="font-weight: 500;">Recursos</b></a></li>
				                <li><a class="sub-titulo" href="<?php echo $directorio; ?>portafolio/wdc.php"><b style="font-weight: 500;">Proyectos</b></a></li>
				                <li><a class="sub-titulo" href="<?php echo $directorio; ?>contacto/contacto.php"><b style="font-weight: 500;">Contactenos</b></a></li>

				        
				    </div>
				</nav>
				<ul class="sidenav components" id="mobile-demo">
	
				    <ul class="collapsible collapsible-accordion">
				        <li class="">
						<li><a class="sub-titulo" href="<?php echo $directorio; ?>index.php"><b style="font-weight: 500;">Inicio</b></a></li>
								<li><a class="sub-titulo" href="<?php echo $directorio; ?>index.php"><b style="font-weight: 500;">Recursos</b></a></li>
				                <li><a class="sub-titulo" href="<?php echo $directorio; ?>index.php"><b style="font-weight: 500;">Proyectos</b></a></li>
				                <li><a class="sub-titulo" href="<?php echo $directorio; ?>contacto/contacto.php"><b style="font-weight: 500;">contactenos</b></a></li>
				        </li>
				    </ul>
				    <ul class="collapsible collapsible-accordion">
				        <li class="">
				           
				            <div class="collapsible-body" style="">
				                <ul>
				                    <li><a class="sub-titulo" href="<?php echo $directorio; ?>novedades/pagos.php">Pagos con datáfonos</a></li>
				                </ul>
				            </div>
				        </li>
				    </ul>
				</ul>
				<div style="padding: 60px;"></div>
			<?php
		}

		function footer($a) {
			$directorio = '';
			if ($a == 'interno') {
				$directorio = '../';
			}
			?>
				<div class="row" style="margin-bottom: 0;">
				    <div class="col s12 ">
				        <div class="col s12 l4">
				            <h3 class="center parrafo-titulo">¿Quienes somos?</h3>
				            <p class="parrafo center">
							Body text for your whole article or post. We’ll put in some lorem ipsum to show how a filled-out page might look:

                            Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate Content. Qui  international first-class nulla ut. Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki excepteur Basset hound. Zürich sleepy perfect consectetur.				            </p>
				         
				        </div>
				        <div class="col s12 l4 center">
				            <h3 class="center marcas-title">MARCAS</h3>
				            <div class="col s12 marcas-icons">
				                <a class="color" href="<?php echo $directorio; ?>cdp/cdp.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">battery_full</i>
				                        <p style="margin-top: 0;">CDP</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>tenda/tenda.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">wifi</i>
				                        <p style="margin-top: 0;">TENDA</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>wisnetworks/wisnetworks.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">signal_cellular_alt</i>
				                        <p style="margin-top: 0;">WIS-NETWORK</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				            </div>
				            <div class="col s12 marcas-icons">
				                <a class="color" href="<?php echo $directorio; ?>ruijienetworks/ruijienetworks.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">rss_feed</i>
				                        <p style="margin-top: 0;">RUIJIE</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>bitdefender/bitdefender.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">security</i>
				                        <p style="margin-top: 0;">BITDEFENDER</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>inspur/inspur.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">dns</i>
				                        <p style="margin-top: 0;">INSPUR</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				            </div>
				           
				                </a>
				            </div>
							<div class="col s14 l4 contactenos">
				            <div class="row">
					                <div class="row">
					                	<button class="col s4 offset-s3 btn-flat waves-effect waves-dark telefono-footer" style="text-align: left;"><i class="socicon-whatsapp" style="color: #00c853;"></i> <span style="font-size: 18px;color: #566573;">+57 301 535 09 64</span></button>
					                	<div class="divider container col s6 offset-s3"></div>
					                </div>
					            	<div class="row">
					            		<button class="col s4 offset-s3 btn-flat waves-effect waves-dark telefono-footer" style="text-align: left;"><i class="material-icons blue-text">call</i> <span style="font-size: 18px;color: #566573;">+507 462 0060</span></button>
					                	<div class="divider container col s6 offset-s3"></div>
					            	</div>
				            </div>
				            <div class="col s10 center">
				                <a href="<?php echo $directorio; ?>contacto/contacto.php" class="btn-flat orange white-text waves-effect waves-light col s8 offset-s2"><i class="material-icons left">email</i><b>CONTACTENOS</b></a>
				            </div>
				            <div class="col s10 center contactenos-icons" >
				                <a href="https://facebook.com" target="_blank" class="btn-flat waves-effect waves-dark" style="height: auto;"><i class="socicon socicon-facebook" style="color: #3b5998;"></i></a>
				            	<a href="https://instagram.com" target="_blank" class="btn-flat waves-effect waves-dark" style="height: auto;"><i class="socicon socicon-instagram" style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);-webkit-background-clip: text;background-clip: text;-webkit-text-fill-color: transparent"></i></a>
				            </div>
				        </div>
				        <!--fin-->
				    </div>
				</div>
				        </div>
				     
				<!--cliengo-->
				<div class="chat-whatsapp-wrapper">
				    <div class="col s12 center titulo-chat-whatsapp">
				        <i class="socicon-whatsapp white-text"></i>
				        <b class="white-text">WhatsApp</b>
				        <i class="material-icons white-text">close</i>
				    </div>
				    <div class="col s12 contenido-chat-whatsapp">
				        <h6 class="center"><b>Completa con tus datos</b></h6>
				        <p class="center">Te comunicaremos con uno de nuestros asesores</p>
				        <div class="input-field col s12">
				            <input id="nombre_whatsapp" type="text" class="validate" required>
				            <label for="nombre_whatsapp" class="black-text">Nombre</label>
				        </div>
				        <div class="row">
				            <div class="col s12">
				                <div class="col s5" style="padding-left: 0;">
				                    <div class="input-field col s12 no-padding">
				                        <select id="indicativo">
				                            <option value="1" selected>CO (+57)</option>
				                            <option value="2">PA (+507)</option>
				                        </select>
				                    </div>
				                </div>
				                <div class="input-field col s7 no-padding">
				                    <input id="telefono_whatsapp" type="number" min="10000000" max="9999999999" class="validate" required>
				                    <label for="telefono_whatsapp" class="black-text">Teléfono</label>
				                </div>
				            </div>
				            <div class="input-field col s12">
				                <input id="mensaje_whatsapp" type="text" class="validate" required>
				                <label for="mensaje_whatsapp" class="black-text">Mensaje</label>
				            </div>
				            <div class="col s12 center">
				                <button class="btn-flat waves-effect waves-light white-text" id="iniciar_chat"><b>Iniciar Chat</b></button>
				            </div>
				        </div>
				    </div>
				</div>
				<button class="btn-whatsapp btn-large waves-effect waves-light white-text no-padding"><i class="socicon-whatsapp"></i></button>
				<!--End Chat WhatsApp -->
				<!--Start Chat Chatbot -->
				<div class="chat-chatbot-wrapper">
				    <div class="col s12 center titulo-chatbot">
				        <i class="material-icons">brightness_1</i>
				        <b class="white-text">Processes</b>
				        <i class="material-icons white-text">close</i>
				    </div>
				    <div class="contenido-chatbot">
				        <div class="row">
				            <div class="col s12 contenido-chat-chatbot grey lighten-3" id="contenido-chat-chatbot">
				                <div class="col s12 no-padding nombre-bot">
				                    Camilo:
				                </div>
				                <div class="col s10 mensaje-bot white-text">
				                    Hola, Me gustaría poderte ayudar, Claro!!! solo en temas comerciales o de ventas, cuéntame como:
				                </div>
				            </div>
				            <div class="col s12">
				                <div class="input-field col s9 no-padding" style="margin: 0;">
				                    <input id="mensaje_chatbot" type="text" required placeholder="Escribe un mensaje..." class="validate" style="border: none;box-shadow: none;">
				                </div>
				                <button class="btn-flat blue waves-effect waves-light right" data-position="left" id="enviar_mensaje" style="margin-top: 6px;"><i class="material-icons white-text">send</i></button>
				            </div>
				        </div>
				    </div>
				</div>
				<i class="notificacion-chatbot">1</i>
				<button class="btn-chatbot btn-large waves-effect waves-light white-text no-padding"><i class="socicon-identica"></i></button>
				<div class="col s12 l12" style="padding: 0; margin: 0">
				    <div class="center" style="background: linear-gradient(to right, rgb(5, 25, 77), rgb(1, 25, 84)); color: white;">
						<b>Processes</b><br>
					Contactanos:<br> <b>+571 462 0060</b> | 
				        <a href="mailto:processes@gmail.com"><b class="white-text">processes@gmail.com</b></a> <br>
							<b>Gabriel</b>
				        <br>
				        <a href="<?php echo $directorio; ?>almacenamiento/POLITICAS-TRATAMIENTO-DE-DATOS-WDC.pdf" target="_blank">
				        <b class="white-text">Politicas de tratamiento de datos</b>
				        </a><br>
						     © <?php echo date('Y'); ?>, todos los derechos reservados  ||  
				        <b>Desarrollado por: 
				        <a class="white-text" target="_blank" href="http://www.grupotecnologico.org">Grupo Tecnológico</a>
				        </b>
				    </div>
				</div>
			<?php
		}

	    function footer2($a){
			$directorio = '';
			if ($a == "interno") {
				$directorio = '../';
			}
			?>
									
			</div>					
				</div>
		
				<!--cliengo-->
				<div class="chat-whatsapp-wrapper">
					<div class="col s12 center titulo-chat-whatsapp">
						<i class="socicon-whatsapp white-text"></i>
						<b class="white-text">WhatsApp</b>
						<i class="material-icons white-text">close</i>
					</div>
					<div class="col s12 contenido-chat-whatsapp">
						<h6 class="center"><b>Completa con tus datos</b></h6>
						<p class="center">Te comunicaremos con uno de nuestros asesores</p>
						<div class="input-field col s12">
							<input id="nombre_whatsapp" type="text" class="validate" required>
							<label for="nombre_whatsapp" class="black-text">Nombre</label>
						</div>
						<div class="row">
							<div class="col s12">
								<div class="col s5" style="padding-left: 0;">
									<div class="input-field col s12 no-padding">
										<select id="indicativo">
											<option value="1" selected>CO (+57)</option>
											<option value="2">PA (+507)</option>
										</select>
									</div>
								</div>
								<div class="input-field col s7 no-padding">
									<input id="telefono_whatsapp" type="number" min="10000000" max="9999999999" class="validate" required>
									<label for="telefono_whatsapp" class="black-text">Teléfono</label>
								</div>
							</div>
							<div class="input-field col s12">
								<input id="mensaje_whatsapp" type="text" class="validate" required>
								<label for="mensaje_whatsapp" class="black-text">Mensaje</label>
							</div>
							<div class="col s12 center">
								<button class="btn-flat waves-effect waves-light white-text" id="iniciar_chat"><b>Iniciar Chat</b></button>
							</div>
						</div>
					</div>
				</div>
				<button class="btn-whatsapp btn-large waves-effect waves-light white-text no-padding"><i class="socicon-whatsapp"></i></button>
				<!--End Chat WhatsApp -->
				<!--Start Chat Chatbot -->
				<div class="chat-chatbot-wrapper">
					<div class="col s12 center titulo-chatbot">
						<i class="material-icons">brightness_1</i>
						<b class="white-text">Processes</b>
						<i class="material-icons white-text">close</i>
					</div>
					<div class="contenido-chatbot">
						<div class="row">
							<div class="col s12 contenido-chat-chatbot grey lighten-3" id="contenido-chat-chatbot">
								<div class="col s12 no-padding nombre-bot">
									Camilo:
								</div>
								<div class="col s10 mensaje-bot white-text">
									Hola, Me gustaría poderte ayudar, Claro!!! solo en temas comerciales o de ventas, cuéntame como:
								</div>
							</div>
							<div class="col s12">
								<div class="input-field col s9 no-padding" style="margin: 0;">
									<input id="mensaje_chatbot" type="text" required placeholder="Escribe un mensaje..." class="validate" style="border: none;box-shadow: none;">
								</div>
								<button class="btn-flat blue waves-effect waves-light right" data-position="left" id="enviar_mensaje" style="margin-top: 6px;"><i class="material-icons white-text">send</i></button>
							</div>
						</div>
					</div>
				</div>
				<i class="notificacion-chatbot">1</i>
				<button class="btn-chatbot btn-large waves-effect waves-light white-text no-padding"><i class="socicon-identica"></i></button>
				<div class="col s12 l12" style="padding: 0; margin: 0">
					<div class="center" style="background: linear-gradient(to right, rgb(5, 25, 77), rgb(1, 25, 84)); color: #fff;">
						<b>Processes</b><br>
					Contactanos:<br> <b>+571 462 0060</b> | 
						<a href="mailto:processes@gmail.com"><b class="white-text">processes@gmail.com</b></a> <br>
							<b>Gabriel</b>
						<br>
						<a href="<?php echo $directorio; ?>almacenamiento/POLITICAS-TRATAMIENTO-DE-DATOS-WDC.pdf" target="_blank">
						<b class="white-text">Politicas de tratamiento de datos</b>
						</a><br>
							© <?php echo date('Y'); ?>, todos los derechos reservados  ||  
						<b>Desarrollado por: 
						<a class="white-text" target="_blank" href="http://www.grupotecnologico.org">Grupo Tecnológico</a>
						</b>
					</div>
				</div>
			<?php
		}

		function scripts($a) {
			$directorio = '';
			if ($a == 'interno') {
				$directorio = '../';
			}
			?>
				<script src="<?php echo $directorio; ?>librerias/jquery-3.6.0.min.js"></script>
				<script src="<?php echo $directorio; ?>librerias/materialize/js/materialize.min.js"></script>
				<script src="<?php echo $directorio; ?>js/completos/index.js?id=<?php echo date('dmYHis'); ?>"></script>
			<?php
		}
		
		function pop_up() {
			?>
				<div class="fondo_pop_up">
					<center>
						<div style="margin-top: 20px;">
							<a href="pagos.php"><img class="img-pop-up" src="almacenamiento/img/mini_datafono.jpg" draggable="false" alt="Ahora con la incorporación de este mini datafono, podrá 		realizar sus compras con tarjetas crédito y débito"></a>
							<br><br>
							<button class="btn_cerrar_popup btn-large red waves-effect waves-light"><div class="icono_cerrar">&times;</div>Cerrar</button>
							<br><br>
							<button class="btn-small white black-text btn_cerrar_perma_popup waves-effect waves-light"><div class="icono_cerrar">&times;</div>Cerrar 		permanentemente</button>
						</div>
					</center>
				</div>
			<?php
		}
	}
	class paginas {

		function index() {
			?>
			
			<div class="row">
				<div class="col s12 no-padding">
					<div class="carousel carousel-slider">
						<a class="carousel-item" href="#one!">
							<img class="responsive-img" src="almacenamiento/img/carousel.png">
							<div class="carousel-caption">
								<h3>Title One</h3>
								<p>This is the first slide</p>
							</div>
						</a>
						<a class="carousel-item" href="#two!">
							<img class="responsive-img" src="almacenamiento/img/carousel.png">
							<div class="carousel-caption">
								<h3>Title Two</h3>
								<p>This is the second slide</p>
							</div>
						</a>
						<a class="carousel-item" href="#three!">
							<img class="responsive-img" src="almacenamiento/img/carousel.png">
							<div class="carousel-caption">
								<h3>Title Three</h3>
								<p>This is the third slide</p>
							</div>
						</a>
						<a class="carousel-item" href="#four!">
							<img class="responsive-img" src="almacenamiento/img/carousel.png">
							<div class="carousel-caption">
								<h3>Title Four</h3>
								<p>This is the fourth slide</p>
							</div>
						</a>
						<a class="carousel-item" href="#five!">
							<img class="responsive-img" src="almacenamiento/img/carousel.png">
							<div class="carousel-caption">
								<h3>Title Five</h3>
								<p>This is the fifth slide</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="almacenamiento/img/7.png">
							<span class="card-title"></span>
						</div>
						<div class="card-content">
							<p>Tienda para mascotas.</p>
							<p>Description of first product</p>
						</div>
						<div class="card-action">
							<a href="#">Ver sitio</a>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="almacenamiento/img/7.png">
							<span class="card-title">Card Title</span>
						</div>
						<div class="card-content">
							<p>E-commerce de mascotas.</p>
							<p>Description of second product.</p>
						</div>
						<div class="card-action">
							<a href="#">Ver sitio</a>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="almacenamiento/img/7.png">
							<span class="card-title">Card Title</span>
						</div>
						<div class="card-content">
							<p>Dashboard para administrador.</p>
							<p>Description of second product.</p>
						</div>
						<div class="card-action">
							<a href="#">Ver sitio</a>
						</div>
					</div>
				</div>
			</div><br><br><br>


			
			    
				<h1 style="font-size:37px;margin-bottom: 100px;" class="center">Proyectos recomendados</h1>
			
				<div class="container plantillasReco">
					<div class="slider deslizar">
						<div class="card targets">
						<img class="template"
							src="https://images.unsplash.com/photo-1689602037070-fec2eca3f5b2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
							alt=""
						/>
						<div class="copy tarjeta">
							<h1 class="textPlan">Plantilla 1</h1>
							<a class="ViewMore" style="color: white" href="./kipor/kipor.php">Ver más...</a>
						</div>
						</div>

						<div class="card targets">
						<img class="template"
							src="https://images.unsplash.com/photo-1718125188885-7ce699512931?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
							alt=""
						/>
						<div class="copy tarjeta">
							<h1 class="textPlan">Plantilla 2</h1>
							<a class="ViewMore" style="color: white" href="./inspur/inspur.php">Ver más...</a>
						</div>
						</div>

						<div class="card targets">
						<img class="template"
							src="https://images.unsplash.com/photo-1718116088537-212b192d1ad9?q=80&w=2075&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
							alt=""
						/>
						<div class="copy tarjeta">
							<h1 class="textPlan">Plantilla 3</h1>
							<a class="ViewMore" style="color: white" href="./wisnetworks/wisnetworks.php">Ver más...</a>
						</div>
						</div>

						<div class="card targets">
						<img class="template"
							src="https://images.unsplash.com/photo-1718194822494-47de8fb7922c?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
							alt=""
						/>
						<div class="copy tarjeta">
							<h1 class="textPlan">PLantilla 4</h1>
							<a class="ViewMore" style="color: white" href="./inspur/inspur.php">Ver más...</a>
						</div>
						</div>

						<div class="card targets">
						<img class="template"
							src="https://images.unsplash.com/photo-1713970700051-556d05c59fce?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
							alt=""
						/>
						<div class="copy tarjeta">
							<h1 class="textPlan">PLantilla 5</h1>
							<a class="ViewMore" style="color: white" href="./tenda/tenda.php">Ver más...</a>
						</div>
						</div>
					</div>
				</div>

			<?php
		}

		function wisnetworks(){
			?>
			<br><br><br>
			<div class="container">
				<img class="imagenMain" src="../almacenamiento/img/Ad1.png" alt="">
			</div>
			<br><br><br>

		
			<div class="container plantillas">
				<main class='gallery'>
					<div class='item' data-pos='0'><img src='https://images.unsplash.com/photo-1708247874023-f6d71a45113a?q=80&w=2344&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='1'><img src='https://images.unsplash.com/photo-1437751059337-ea72d4f73fcf?q=80&w=2322&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='2'><img src='https://images.unsplash.com/photo-1515594515116-863345d8507c?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='3'><img src='https://images.unsplash.com/photo-1533106497176-45ae19e68ba2?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='4'><img src='https://images.unsplash.com/photo-1517953377824-516f2dca803b?q=80&w=2378&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
				</main>
				<br>
			
			</div>
				<div class="card description">
					<div class="card-header">
						E-commerce
					</div>
					<div class="card-body">
						<h5 class="card-title">E-commerce para mascotas</h5>
						<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						<div class="col s10 center">
							<a href="<?php echo $directorio; ?>contacto/contacto.php" class="btn-flat white-text waves-effect waves-light col s8 plantilla offset-s2 center" style="background:#f29119;"><i class="material-icons left">email</i><b>CONTACTENOS</b></a>
						</div>
					</div>
				</div>
			<br><br>
			<?php
		}

		function kipor() {
			?>
		  <br><br><br>
			<div class="container">
				<img class="imagenMain" src="../almacenamiento/img/Ad1.png" alt="">
			</div>
			<br><br><br>

		
			<div class="container plantillas">
				<main class='gallery'>
					<div class='item' data-pos='0'><img src='https://images.unsplash.com/photo-1708247874023-f6d71a45113a?q=80&w=2344&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='1'><img src='https://images.unsplash.com/photo-1437751059337-ea72d4f73fcf?q=80&w=2322&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='2'><img src='https://images.unsplash.com/photo-1515594515116-863345d8507c?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='3'><img src='https://images.unsplash.com/photo-1533106497176-45ae19e68ba2?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='4'><img src='https://images.unsplash.com/photo-1517953377824-516f2dca803b?q=80&w=2378&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
				</main>
				<br>
			
			</div>
				<div class="card description">
					<div class="card-header">
						E-commerce
					</div>
					<div class="card-body">
						<h5 class="card-title">E-commerce para mascotas</h5>
						<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						<div class="col s10 center">
							<a href="<?php echo $directorio; ?>contacto/contacto.php" class="btn-flat white-text waves-effect waves-light col s8 plantilla offset-s2 center" style="background:#f29119;"><i class="material-icons left">email</i><b>CONTACTENOS</b></a>
						</div>
					</div>
				</div>
			<br><br>
			<?php
		}

		function yorking(){
			?>
				<div class="row">
					<div class="col s12 no-padding">
						<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/yorking/plantas_electricas_yorking.webp"></a>
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/yorking/plantas-electricas-y-diesel-yorking.webp"></a>
						</div>
					</div>
				</div>
 				<h1 class="center title">YORKING</h1>
 				<br>
 				<div class="center divider"></div>
 				<br>
 				<div class="container">
 					<div class="row">
 						<div class="col s12 l9 center">
 							<div class="col s12">
 								<img class="responsive-img" src="../almacenamiento/img/logo-yorking.png">
 							</div>
 						<div class="col s12">
 							<p class="text-wisnetworks" style="line-height: 1.2;">
 								<b>
 									La nueva línea de Plantas eléctricas YORKING o Generadores YORKING tienen un excelente desempeño con motores de alta gama, chasis robusto y módulo de control digital o analógico, las plantas eléctricas YORKING van desde 5 KVA a 110 KVA en las versiones monofásico y trifásico, con revoluciones de motor de 1.800 RPM a 3.600 RPM, las plantas eléctricas YORKING usan combustible Gasolina y Diésel
 								</b>
 							</p>
 						</div>
 					</div>
 					<div class="col s12 l3 center">
 						<a target="_blank" href="http://www.yorkingpower.com/index.php?lang=en-us"><img class="img-all borde responsive-img" src="../almacenamiento/img/Yorking-DieselGenerator.jpg"><p>Click para mas informacion...</p></a>
 					</div>
 					<div class="row">
 						<h2 class=" col s12 center title"><b>Las ventajas de tener su Planta Eléctrica Yorking:</b></h2>
 						<p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Las plantas eléctricas YORKING permiten no cortar el suministro eléctrico en sus oficinas, fábricas o almacenes, ya que están diseñadas para mantener continuamente la energía y así asegurar el normal funcionamiento de todos los procesos y equipos que requieran electricidad.</p>
 						<p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Las plantas eléctricas YORKING evitarán pérdidas económicas ya que impide que se afecte un proceso de fabricación, ya sean productos alimenticios, marroquinería, textiles, entre otros. También garantizará el normal funcionamiento de un evento social, oficina o local comercial.</p>
 						<p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Cada planta eléctrica YORKING, es sometida a exhaustivas pruebas y almacenada con todos los cuidados necesarios en un ambiente limpio y seco. Además, el despacho de nuestra parte es manejado por operadores especialmente entrenados.</p>
 						<div class="col s12 m6 center">
 							<img class="responsive-img" src="../almacenamiento/img/plantas-yorking-necesidades-empresa.jpg">
 						</div>
 						<div class="col s12 m6 center">

 							<h4 class="title-parrafo-n" style="border: none;font-size: 19.6px;line-height: 1.4;"><b>Las plantas eléctricas YORKING tienen una capacidad de entre 5 y 110 kilovatios (KVA), dependiendo de las necesidades de su empresa como: restaurantes, supermercados, hoteles, maquilas, oficina, local comercial, etc.
 							</b></h4>
 						</div>
 					</div>
 					</div>
 				</div>
			<?php
		}

		function tenda(){
			?>
		<br><br><br>
			<div class="container">
				<img class="imagenMain" src="../almacenamiento/img/Ad1.png" alt="">
			</div>
			<br><br><br>

		
			<div class="container plantillas">
				<main class='gallery'>
					<div class='item' data-pos='0'><img src='https://images.unsplash.com/photo-1708247874023-f6d71a45113a?q=80&w=2344&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='1'><img src='https://images.unsplash.com/photo-1437751059337-ea72d4f73fcf?q=80&w=2322&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='2'><img src='https://images.unsplash.com/photo-1515594515116-863345d8507c?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='3'><img src='https://images.unsplash.com/photo-1533106497176-45ae19e68ba2?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='4'><img src='https://images.unsplash.com/photo-1517953377824-516f2dca803b?q=80&w=2378&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
				</main>
				<br>
			
			</div>
				<div class="card description">
					<div class="card-header">
						E-commerce
					</div>
					<div class="card-body">
						<h5 class="card-title">E-commerce para mascotas</h5>
						<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						<div class="col s10 center">
							<a href="<?php echo $directorio; ?>contacto/contacto.php" class="btn-flat white-text waves-effect waves-light col s8 plantilla offset-s2 center" style="background:#f29119;"><i class="material-icons left">email</i><b>CONTACTENOS</b></a>
						</div>
					</div>
				</div>
			<br><br>
			<?php
		}

		function bitdefender(){
			?>
				<div class="row">
      				<div class="col s12 no-padding">
        				<div class="carousel carousel-slider">
							<?php
								$imagenes_carousel = scandir('../almacenamiento/carousel/bitdefender');
								for ($i=0; $i < count($imagenes_carousel); $i++) { 
									if ($imagenes_carousel[$i] != '.' && $imagenes_carousel[$i] != '..') {
										?>
											<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/bitdefender/<?php echo $imagenes_carousel[$i]; ?>"></a>
										<?php
									}
								}
							?>
        				</div>
      				</div>
  				</div>
 				<h1 class="center title">BITDEFENDER</h1>
 				<br>
 				<div class="center divider"></div>
 				<br>
 				<div class="container">
 					<div class="panel-body" style="background-color: #020202;">
 						<div class="row">
 							<div class="col s10 m12">
  							<div class="col s6" style="border-right: 1px #fff solid;">
  								<h3 class="center panel-body-text">HOGAR</h3>
  							</div>
  							<div class="col s6">
  								<h3 class="center panel-body-text">CORPORATIVO</h3>
  							</div>
							</div>
 						</div>
 					</div>
 					<div class="col s12 center"><img class="img-bitdefender" src="../almacenamiento/img/logo-bitdefender.png" style="margin-bottom: 20px;"><b class="subtitulo" style="font-size: 36px;">Bitdefender</b></div><br>
 					<div class="divider"></div>
 					<div class="row">
 						<div class="col m8 s12">
 							<div class="col l12 s12"><h2 class="center title-bitdefender"><b>PROTEJA SU COMPAÑÍA CONTRA LA AMENAZA DEL RANSOMWARE</b></h2></div>
 							<div class="col l12 s12">
 								<p class="center parrafo-bitdefender" style="line-height: 1.2;">
 									El Ransomware se ha convertido rápidamente en una de las amenazas más temidas en los entornos empresariales, donde su enfoque principal  es el Secuestro de la información y pedir un rescate por la liberación.
								</p>
							</div>
 						</div>
 						<div class="col m4 s12 border center" style="margin-top: 20px;">
 							<img class="img2-bitdefender" src="../almacenamiento/img/proteja-su-compania-contra-ransomware.png">
 						</div>
 					</div>
 					<div class="divider"></div><br>
 					<div class="row">
 						<div class="col s12 l12">
 							<div class="col m4 s12 center">
 								<img class="img3-bitdefender" src="../almacenamiento/img/soluciones-bitdefender.png">
 							</div>
 							<div class="col m8 s12">
 								<div class="col s12 l9"><h2 class="center title-bitdefender"><b>PARA CADA NECESIDAD ENCONTRARÁ UNA SOLUCIÓN</b></h2></div>
 								<div class="col s12"><p class="center parrafo-bitdefender" style="font-weight: 300;line-height: 1.2;text-align: center;">Excelente producto que ofrece la mejor seguridad y protección de su información, a muy bajo costo y con toda la facilidad de manejo.</p></div>
 							</div>
 						</div>
 					</div>	
 					<div class="divider"></div><br>
 					<div class="row">
 						<div class="col s12 l12">
 							<div class="col s12 m4">
 								<h2 class="center title-bitdefender"><b>BITDEFENDER VS RASOMWARE</b></h2>
 								<p class="center parrafo-bitdefender" style="font-weight: 300;line-height: 1.2;">
 									Con un Portafolio muy amplio, BITDEFENDER garantiza un 99.97% de efectividad en la Protección de la Información de su Compañía, con todas sus capas fusionadas, brindan solución en Prevención, Detección Temprana y Reparación.
 								</p>
 							</div>
 							<div class="col s12 m8">
 								<div class="title-parrafo-red"> 
 									<h4 class="col s12 title-bitdefender"><b>-PREVENCIÓN:</b></h4>
 									<p class="center parrafo-bitdefender" style="font-weight: 300;line-height: 1.2;">
 										Sin importar lo mucho que cambie el malware o el Ransomware, Bitdefender puede detectar con precisión los nuevos patrones de Ransomware, tanto en tiempo de 	ejecución como previamente
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<h4 class="col s12 title-bitdefender"><b>- DETECCIÓN TEMPRANA:</b></h4>
 									<p class="center parrafo-bitdefender" style="font-weight: 300;line-height: 1.2;">
 										Monitorización de procesos en tiempo real, cortando de raíz las actividades y procesos del Ransomware, como modificaciones de claves de registro, acciones de lectura, escritura, cifrados de información.
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<h4 class="col s12 title-bitdefender"><b>- REPARACIÓN / LIMPIEZA:</b></h4>
 									<p class="center parrafo-bitdefender" style="font-weight: 300;">
 										La solución tiene la capacidad de cerrar un proceso malicioso, revertir cambios y limpiar.
 									</p>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<img class="responsive-img" src="../almacenamiento/img/seguridad-bitdefender.png" width="100%">
			<?php
		}

		function inspur() {
			?>
			<br><br><br>
			<div class="container">
				<img class="imagenMain" src="../almacenamiento/img/Ad1.png" alt="">
			</div>
			<br><br><br>

		
			<div class="container plantillas">
				<main class='gallery'>
					<div class='item' data-pos='0'><img src='https://images.unsplash.com/photo-1708247874023-f6d71a45113a?q=80&w=2344&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='1'><img src='https://images.unsplash.com/photo-1437751059337-ea72d4f73fcf?q=80&w=2322&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='2'><img src='https://images.unsplash.com/photo-1515594515116-863345d8507c?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='3'><img src='https://images.unsplash.com/photo-1533106497176-45ae19e68ba2?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
					<div class='item' data-pos='4'><img src='https://images.unsplash.com/photo-1517953377824-516f2dca803b?q=80&w=2378&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'></div>
				</main>
				<br>
			
			</div>
				<div class="card description">
					<div class="card-header">
						E-commerce
					</div>
					<div class="card-body">
						<h5 class="card-title">E-commerce para mascotas</h5>
						<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						<div class="col s10 center">
							<a href="<?php echo $directorio; ?>contacto/contacto.php" class="btn-flat white-text waves-effect waves-light col s8 plantilla offset-s2 center" style="background:#f29119;"><i class="material-icons left">email</i><b>CONTACTENOS</b></a>
						</div>
					</div>
				</div>
			<br><br>
			<?php
		}

		function portafolio() {
			?>
			<section class="proyectos">
			<form id="filter-form">>
				<p>Filtrar por categoria</p>
				<label>
				<input  type="checkbox" name="snacks" checked />
				E-commerce
				</label>

				<label>
				<input  type="checkbox" name="naps" checked />
				Blog
				</label>

				<label>
				<input  type="checkbox" name="computers" checked />
				Paginas corporativas
				</label>
			</form>

			<article data-category="naps">
				<img src="https://images.unsplash.com/photo-1708724195876-1156245fce21?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Afternoon Hammock" />
				<h2>Afternoon Hammock</h2>
				<p class="categories" ></p>
			</article>
			<article data-category="naps">
				<img src="https://images.unsplash.com/photo-1708724195876-1156245fce21?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Afternoon Hammock" />
				<h2>Afternoon Hammock</h2>
				<p class="categories"></p>
			</article>
			<article data-category="naps">
				<img src="https://images.unsplash.com/photo-1708724195876-1156245fce21?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Afternoon Hammock" />
				<h2>Afternoon Hammock</h2>
				<p class="categories" ></p>
			</article>
			<article data-category="naps">
				<img src="https://images.unsplash.com/photo-1708724195876-1156245fce21?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Afternoon Hammock" />
				<h2>Afternoon Hammock</h2>
				<p class="categories" ></p>
			</article>

			<article data-category="computers">
				<img src="https://images.unsplash.com/photo-1709625862284-b8a82d339b99?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Tomagotchi" />
				<h2>Tomagotchi</h2>
				<p class="categories" ></p>
			</article>
			<article data-category="computers">
				<img src="https://images.unsplash.com/photo-1709625862284-b8a82d339b99?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Tomagotchi" />
				<h2>Tomagotchi</h2>
				<p class="categories" ></p>
			</article>
			<article data-category="computers">
				<img src="https://images.unsplash.com/photo-1709625862284-b8a82d339b99?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Tomagotchi" />
				<h2>Tomagotchi</h2>
				<p class="categories"></p>
			</article>
			<article data-category="computers">
				<img src="https://images.unsplash.com/photo-1709625862284-b8a82d339b99?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Tomagotchi" />
				<h2>Tomagotchi</h2>
				<p class="categories" ></p>
			</article>

			<article data-category="snacks">
				<img src="https://images.unsplash.com/photo-1708724195876-1156245fce21?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Afternoon Hammock" />
				<h2>Afternoon Hammock</h2>
				<p class="categories" ></p>
			</article>
			<article data-category="snacks">
				<img src="https://images.unsplash.com/photo-1708724195876-1156245fce21?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Afternoon Hammock" />
				<h2>Afternoon Hammock</h2>
				<p class="categories"></p>
			</article>
			<article data-category="snacks">
				<img src="https://images.unsplash.com/photo-1708724195876-1156245fce21?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Afternoon Hammock" />
				<h2>Afternoon Hammock</h2>
				<p class="categories"></p>
			</article>
			<article data-category="snacks">
				<img src="https://images.unsplash.com/photo-1708724195876-1156245fce21?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=400" alt="Afternoon Hammock" />
				<h2>Afternoon Hammock</h2>
				<p class="categories" ></p>
			</article>
			
			</section>

			<?php
		}
		
		function contacto() {
			?>
				<div class="img-fondo-contacto">
		            <div class="row">
		                <div class="col s12">
		                    <div class="container">
		                        <div class="col s12 fondo-contactanos valign-wrapper">
		                            <div class="col s12 l6">
		                                <div class="row">
		                                    <div class="col s12 no-padding">
		                                        <h2 class="white-text center"><b>PROCESSES</b></h2>
			                                     	
		                                        <div class="divider"></div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col s12 l6 center">
		                                <div class="row">
		                                    <div class="input-field col s12">
		                                        <input id="nombre" type="text" class="validate input-contacto" required placeholder="Nombre">
		                                    </div>
		                                    <div class="input-field col s12 wrapper-input-contacto">
		                                        <input id="correo" type="email" class="validate input-contacto" required placeholder="Correo">
		                                    </div>
		                                    <div class="input-field col s12 wrapper-input-contacto">
		                                        <input id="telefono" type="number" min="1000000" max="9999999999" class="validate input-contacto" required placeholder="Teléfono">
		                                    </div>
		                                    <div class="input-field col s12 wrapper-select-contacto">
		                                        <select id="asunto">
		                                            <option value="" disabled selected>Elige tu consulta...</option>
		                                            <option value="Cotización">Cotización</option>
		                                            <option value="Pregunta General">Pregunta general</option>
		                                            <option value="Afiliación">Reclamos</option>
		                                        </select>
		                                    </div>
		                                    <div class="input-field col s12 wrapper-textarea-contacto">
		                                        <textarea required id="mensaje" class="materialize-textarea input-contacto" data-length="2000" placeholder="Mensaje" style="height: 45px;"></textarea>
		                                    </div>
		                                    <div class="col s12 center">
		                                        <div class="g-recaptcha" data-sitekey="6LfkGjYUAAAAAJOUW9sR38es4gISJ2y2TNnxe06m"></div>
		                                        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
		                                        <br><br>
		                                    </div>
		                                    <div class="col s12 center">
		                                        <button class="btn btn-large orange waves-effect waves-light" id="envio"><b>Contactar</b></button>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
			<?php
		}

		function distribuidores() {
			?>
				<div class="center">
			 		<h1 class="text-36">Distribuidores <b>WDC MAYORISTA</b></h1>
			 	</div>
			 	<div class="row">
			 		<div class="col s12 l12">
			 			<div class="col s12 l6">
			 				<img class="img-distribuidor responsive-img" src="../almacenamiento/img/distribuidores.png">
			 			</div>
			 			<div class="col s12 l6  grey lighten-3 cuadro-distribuidor">
			 				<p class="texto-distribuidor">
			 					WDC MAYORISTA S.A.S desea acompañarlo y brindarle soluciones que apoyen su Compañía, motivo por el cual presentamos los Requisitos  que debe cumplir paraserNuestro Distribuidor Autorizado para comercializar Nuestros Productos.
			 				</p>
			 			</div>
			 		</div>
			 	</div>
			 	<div class="container">
			 		<h1 class="text-36 linea-decoracion">Procedimiento para ser distribuidor de <b>WDC MAYORISTA</b></h1>
			 		<div class="divider"></div>
			 		<br>
			 		<div class="contenido">
			 			<div class="row">
			 				<div class="col s12 l12">
			 					<h1 class="b">1</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Descargar y diligenciar el  Formato  Registro Nuevo Cliente en su totalidad, con la firma del Representante Legal.
			 						</p>
			 						<div class="right-align">	
			 						<a target="_blank" href="../almacenamiento/formato.pdf" class="center waves-effect waves-light btn">Descargar Formato Registro</a>
			 						</div>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">2</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Adjuntar Cámara y Comercio no mayor a 30 días.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">3</h1>
			 					<blockquote>
			 						<p class="lead">
			 							RUT actualizado.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">4</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Cédula del Representante Legal.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">5</h1>
			 					<blockquote>
			 						<p class="lead">
			 							3 Referencias comerciales no mayor a 30 días.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">6</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Enviar la documentación a la dirección de correo <br> <a class="text-responsive" href="mailto:comercial@wdcmayorista.com">comercial@wdcmayorista.com</a>
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">7</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Una vez realizado el estudio de la documentación, se procederá con la activación de un código asignándole un Ejecutivo de Cuenta quien atenderá todos sus requerimientos.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">8</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Las 3 primeras compras son de contado, en el momento de solicitud de crédito este entrara a estudio en un comité de crédito y financiero o si lo requieres puede realizar su pago con cheque Pos Fechado a 30 días, validado por Covicheque - Covinoc o Asodatos.
			 						</p>
			 					</blockquote>
			 				</div>
			 			</div>

			 		</div>
			 			

			 	</div>
			<?php
		}

		function ubicacion() {
			?>
				<div class="mapa">
					<div class="row">
						<div class="col s2"></div>
						<div class="col s8">
							<center>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.1333198367611!2d-74.06371050004381!3d4.676954021135809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aefc520b23d%3A0x68a77a92740f5c8e!2sCl.+88+%2330-49%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1508791893279" width="90%" height="700" frameborder="0" style="border:0" allowfullscreen=""></iframe> 
							</center>
						</div>
						<div class="col s2"></div>
					</div>
				</div>
			<?php
		}

		function pagos() {
			?>
				<div class="row">
				    <div class="col s12 no-padding">
				        <div class="carousel carousel-slider">
				            <?php
				                $imagenes_carousel = scandir('../almacenamiento/carousel/pagos');
								for ($i=0; $i < count($imagenes_carousel); $i++) { 
									if ($imagenes_carousel[$i] != '.' && $imagenes_carousel[$i] != '..') {
										?>
											<a class="carousel-item" href="#one!"><img class="responsive-img" src="../almacenamiento/carousel/pagos/<?php echo $imagenes_carousel[$i]; ?>"></a>
										<?php
									}
								}
			                ?>
				        </div>
				    </div>
				</div>
				<div class="container">
				    <br>
				    <div class="divider"></div>
				    <br>
				    <h1 class="titulo center">
				        ¡Mejoramos para usted!
				    </h1>
				    <br>
				    <br>
				    <p class="subtitulo center">
				        Ahora puede comprar con sus tarjetas de <u><b>crédito</b></u> y <u><b>débito</b></u>:
				    </p>
				    <div class="row">
				        <div class="col s12 l12">
				            <div class="col s6 l6 right-align"><img class="responsive-img" src="../almacenamiento/img/tarjeta-mastercard.jpg"></div>
				            <div class="col s6 l6"><img class="responsive-img" src="../almacenamiento/img/tarjeta-visa.jpg"></div>
				        </div>
				        <div class="center subtitulos-pagos">
				            <u><b>Y no solo eso... Ahora también:</b></u>
				        </div>
				    </div>
				    <br>
				    <div class="extra center">¡Hacemos domicilio y pagas cuando recibes el producto!</div>
				    <br>
				    <div class="col-md-12" style="margin-top: 40px;text-align: justify;">
				        <p style="text-align: center;"><span class="subtitulo_contenido_b">¿Cómo funciona?</span></p>
				        <br>
				        <br>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">Un domiciliario se dirigirá a la dirección acordada para entregar el paquete.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">Una vez en el lugar acordado, antes de realizar la entrega del producto solicitado, el domiciliario necesitará realizar uso de un datáfono que lleva consigo para ingresar una tarjeta de crédito o débito.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">Cuando se haya acreditado el pago, se entregará el producto en las fechas acordadas previamente y se otorgará el comprobante de la venta.</h4>
				        </div>
				    </div>
				    <div class="col-md-12" style="margin-top: 40px;text-align: justify;">
				        <p style="text-align: center;"><span class="subtitulo_contenido_b">¿Que beneficios tiene?</span></p>
				        <br>
				        <br>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El datáfono permitirá recibir pagos con tarjetas crédito y débito con banda magnética y chip.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El cliente recibirá el comprobante de la venta por E-mail.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">Nos permite llevar un control constante de la transacción realizada para garantizar la calidad del proceso.</h4>
				        </div>
				    </div>
				    <div class="col-md-12" style="margin-top: 40px;text-align: justify;">
				        <p style="text-align: center;"><span class="subtitulo_contenido_b">Para tener en cuenta:</span></p>
				        <br>
				        <br>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El valor del domicilio dependerá de: <b>la cantidad, el tipo, y el precio del producto</b> solicitado.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El proceso de compra es monitorizado y totalmente seguro.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El domiciliario(s) que entrega el producto esta debidámente identificado con un carnet que permitirá verificar la legimitidad del proceso.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El domiEn caso de necesitarse, podrá dividir el pago total del producto solicitado dando una parte en efectivo y la parte restante usando alguna tarjeta crédito o débito.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">En caso de tener alguna duda, comuníquese con nosotros en cualquiera de las líneas que aparecen al final de esta página.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">* Las compras realizadas por este medio tienen un <b>recargo del 4%</b> sobre el valor de la compra.</h4>
				        </div>
				    </div>
				</div>
			<?php
		}

	}
?>