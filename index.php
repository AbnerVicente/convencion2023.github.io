<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="es">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Convencion 2023</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="assets/js/sweetalert/sweetalert2.js"></script>
		<link type="text/css" rel="stylesheet" href="assets/js/sweetalert/sweetalert2.css" />

		<style>
			.col-sm-4{
				flex: 0 0 auto;
   			width: 33.33333333%;
			}
			.full-width{
				
				width: 100%;
			}
		</style>

		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>
      var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
    </script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/auth/bg4.jpg'); } [data-bs-theme="dark"] body { background-image: url('assets/media/auth/bg4-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="#" class="mb-7">
							<img alt="Logo" src="assets/media/logos/facultad2.png" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">Convencion UMG 2023</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20" id="divCardFormulario">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							
							<!--begin::REGISTRARSE-->
							<div id="divRegistrarse">
									<!--begin::Form-->
									<form class="form w-100" id="formNuevoRegistro" novalidate="novalidate"   data-kt-redirect-url="" action="#">
										<!--begin::Heading-->
										<div class="text-center mb-11">
											<!--begin::Title-->
											<h1 class="text-dark fw-bolder mb-3">Registrarse</h1>
											<!--end::Title-->
											<!--begin::Subtitle-->
											<div class="text-gray-500 fw-semibold fs-6">Convencion 2023</div>
											<!--end::Subtitle=-->
										</div>
										<!--begin::Heading-->
										<!--begin::Login options-->
										<div class="row g-3 mb-9">
											<!--begin::Col-->
											<div class="col-md-6">
												<!--begin::ESTUDIANTE link=--> 
												<a href="#"  id="btnEstudiante" tipo="1" class="btn btnTipoRegistro btn-flex btn-outline  btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100 btn-outline-dashed btn-outline-success">
													<img alt="Logo" src="assets/media/svg/brand-logos/persona.svg" class="h-15px me-3" />
													Estudiante
												</a>
												<!--end::ESTUDIANTE link=-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6">
												<!--begin::CATEDRATICO link=-->
												<a href="#" id="btnCatedratico" tipo="2"  class="btn btnTipoRegistro btn-flex btn-outline  btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
													<img alt="Logo" src="assets/media/svg/brand-logos/person-workspace.svg"  class="theme-light-show h-15px me-3" />
													Catedrático
												</a>
												<!--end::CATEDRATICO link=-->
											</div>
											<!--end::Col-->
										</div>
										<input type="hidden" placeholder="" name="tipoParticipante" id="tipoParticipante" value="1" autocomplete="off" class="form-control bg-transparent" />
										<!--end::Login options-->
										<!--begin::Separator-->
										<div class="separator separator-content my-14">
											<span class="w-125px text-gray-500 fw-semibold fs-7">Datos</span>
										</div>
										<!--end::Separator-->
										<!--begin::Input group=-->
										<div class="fv-row mb-2 row" id="divCarnet">
											<!--begin::Carné-->
											<span class="  text-gray-500 fw-semibold fs-7">No. de Carné</span>
											<div class="fv-row mb-2 col-md-4  col-sm-4  " >
												<!--begin::carrera-->
												<input type="number" placeholder="Carrera" name="carrera" id="carrera" autocomplete="off" class="form-control bg-transparent" />
												<!--end::carrera-->
											</div>
											
											<div class="fv-row mb-2 col-md-4  col-sm-4  " >
												<!--begin::anio-->
												<input type="number" placeholder="Año" name="anio" id="anio" autocomplete="off" class="form-control bg-transparent" />
												<!--end::anio-->
											</div>
											
											<div class="fv-row mb-2 col-md-4  col-sm-4  " >
												<!--begin::carnet-->
												<input type="number" placeholder="Código" name="carnet" id="carnet" autocomplete="off" class="form-control bg-transparent" />
												<!--end::carnet-->
											</div>
											<!--end::Carné-->
										</div>
										
										<!--begin::Input group=-->
										<div class="fv-row mb-3 d-none" id="divCodigoCatedratico">
											<!--begin::nombres-->
											<span class="  text-gray-500 fw-semibold fs-7">Código de Catedrático:</span>
											<input type="number" placeholder="" name="codigoCatedratico" id="codigoCatedratico" autocomplete="off" class="form-control bg-transparent" />
											<!--end::nombres-->
										</div>
										<!--end::Input group=-->
										
		
		
										<!--end::Input group=-->
										<div class="fv-row mb-3">
											<!--begin::nombres-->
											<span class="  text-gray-500 fw-semibold fs-7">Nombres:</span>
											<input type="text" placeholder="" name="nombres" autocomplete="off" class="form-control bg-transparent" />
											<!--end::nombres-->
										</div>
										<!--end::Input group=-->
		
									
										<div class="fv-row mb-3">
											<!--begin::apellidos-->
											<span class="  text-gray-500 fw-semibold fs-7">Apellidos:</span>
											<input type="text" placeholder="" name="apellidos" id="apellidos" autocomplete="off" class="form-control bg-transparent" />
											<!--end::apellidos-->
										</div>
										<!--end::Input group=-->
										
										<div class="fv-row mb-3">
											<!--begin::apellidos-->
											<span class="  text-gray-500 fw-semibold fs-7">Correo Electrónico personal:</span>
											<input type="email" placeholder="" name="email"  id="email" autocomplete="off" class="form-control bg-transparent" />
											<!--end::apellidos-->
										</div>
										<!--end::Input group=-->
										
										<!--begin::Submit button-->
										<div class="d-grid mb-10">
											<button type="button" id="btnGuardarRegistro" class="btn btn-primary">
												<!--begin::Indicator label-->
												<span class="indicator-label">Guardar Registro</span>
												<!--end::Indicator label-->
												<!--begin::Indicator progress-->
												<span class="indicator-progress">Espere por favor...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												<!--end::Indicator progress-->
											</button>
										</div>
										<!--end::Submit button-->
										<!--begin::Sign up-->
										<div class="text-gray-500 text-center fw-semibold fs-6">¿Ya tienes registro?
										<a id="btnCargarIniciar" class="btn link-primary">Verificar Codigo</a></div>
										<!--end::Sign up-->
									</form>
									<!--end::Form-->
									
							</div>
							<!--begin::REGISTRARSE-->
								
							<!--begin::INICIAR SESION-->
							<div id="divIniciarSesion" class="d-none full-width">
								<!--begin::Form-->
								<form class="form w-100" id="formVerificarRegistro" novalidate="novalidate"   data-kt-redirect-url="" action="#">
									<!--begin::Heading-->
									<div class="text-center mb-11">
										<!--begin::Title-->
										<h1 class="text-dark fw-bolder mb-3">Verificar Registro</h1>
										<!--end::Title-->
										<!--begin::Subtitle-->
										<div class="text-gray-500 fw-semibold fs-6">Convencion 2023</div>
										<!--end::Subtitle=-->
									</div>
									<!--begin::Heading-->


									<div class="fv-row mb-8 fv-plugins-icon-container">
										<!--begin::Email-->
										<input type="text" placeholder="Usuario" name="usuario" autocomplete="off" class="form-control bg-transparent"> 
										<!--end::Email-->
									<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>


									<div class="fv-row mb-3 fv-plugins-icon-container">    
										<!--begin::Password-->
										<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent">
										<!--end::Password-->
									<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
								 
									<div class="fv-row mb-2 row" id="divCodigoBarra">
										<!--begin::Carné-->
										<span class="  text-gray-500 fw-semibold fs-7">Código Barra</span>
										<div class="fv-row mb-2 col-md-3  col-sm-3  " >
											<!--begin::codigo1-->
											<input type="number" placeholder="000" name="codigo1" id="codigo1" autocomplete="off" class="form-control bg-transparent" />
											<!--end::codigo1-->
										</div>
										
										<div class="fv-row mb-2 col-md-3  col-sm-3  " >
											<!--begin::codigo2-->
											<input type="number" placeholder="000" name="codigo2" id="codigo2" autocomplete="off" class="form-control bg-transparent" />
											<!--end::codigo2-->
										</div>
										
										<div class="fv-row mb-2 col-md-3  col-sm-3  " >
											<!--begin::codigo3-->
											<input type="number" placeholder="000" name="codigo3" id="codigo3" autocomplete="off" class="form-control bg-transparent" />
											<!--end::codigo3-->
										</div>
										
										<div class="fv-row mb-2 col-md-3  col-sm-3  " >
											<!--begin::codigo4-->
											<input type="number" placeholder="000" name="codigo4" id="codigo4" autocomplete="off" class="form-control bg-transparent" />
											<!--end::codigo4-->
										</div>
										<!--end::Carné-->
									</div>
										


									<!--begin::Submit button-->
									<div class="d-grid mb-10">
										<button type="button" id="btnVerificarRegistro" class="btn btn-primary">
											<!--begin::Indicator label-->
											<span class="indicator-label">Completar Registro</span>
											<!--end::Indicator label-->
											<!--begin::Indicator progress-->
											<span class="indicator-progress">Espere por favor...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											<!--end::Indicator progress-->
										</button>
									</div>
									<!--end::Submit button-->



									<!--end::Submit button-->
									<!--begin::Sign up-->
									<div class="text-gray-500 text-center fw-semibold fs-6">¿Realizar registro?
									<a id="btnRealizarRegistro" class="btn link-primary">Crear registro</a></div>
									<!--end::Sign up-->
								</form>
								<!--end::Form-->

							</div>
							<!--begin::INICIAR SESION-->

							
						</div>
						<!--end::Wrapper-->
						 
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/authentication/sign-in/general.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		<script type="text/javascript">
			$(document).ready(function(){

					// Verificar si se accede desde un dispositivo móvil
					function esDispositivoMovil() {
						return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
					}

					if (esDispositivoMovil()) {
						$("#divCardFormulario").removeClass("p-20")
						$("#divCardFormulario").addClass("p-5")
						//console.log("Accediendo desde un dispositivo móvil");
					} else {
						//console.log("Accediendo desde una computadora");
					}





				$(".btnTipoRegistro").on("click", function(e){
					e.preventDefault();
					var idBoton = $(this).attr("id");
					$(".btnTipoRegistro").removeClass(" btn-outline-dashed btn-outline-success  ");
					$("#"+idBoton).addClass(" btn-outline-dashed btn-outline-success")
					$("#formNuevoRegistro")[0].reset();

					if($("#"+idBoton).attr("tipo") == 1){ // ESTUDIANTE
						$("#divCarnet").removeClass("d-none")
						$("#divCodigoCatedratico").addClass("d-none")
					}else{ // Catedratico
						$("#divCodigoCatedratico").removeClass("d-none")
						$("#divCarnet").addClass("d-none")
					}
					$("#formNuevoRegistro #tipoParticipante").val($("#"+idBoton).attr("tipo"))
				})

				$("#btnGuardarRegistro").on("click", function(e){
					e.preventDefault();
					bloquearBoton("btnGuardarRegistro")
					$.post("funciones/ws_registros.php", "accion=nuevoRegistro&"+$("#formNuevoRegistro").serialize(), function(data){
						if(data.resultado){
							Swal.fire({icon:"success", title:"Exito", text:data.mensaje, confirmButtonText:"Aceptar" }).then((result)=>{
								location.reload();
							})

						}else{
							Swal.fire({icon:"warning", title:"Lo sentimos",  text:data.mensaje, confirmButtonText:"Aceptar"})

						}
						desbloquearBoton("btnGuardarRegistro")
					},"json")
					.fail(function(){
						Swal.fire({icon:"error", title:"Lo sentimos", text: "No existe conexion con el servidor", confirmButtonText:"Aceptar"})
						desbloquearBoton("btnGuardarRegistro")
					})
				})

				$("#btnCargarIniciar").on("click", function(e){
					e.preventDefault();
					$("#formNuevoRegistro")[0].reset();
					$("#divRegistrarse").addClass("d-none");
					$("#divIniciarSesion").removeClass("d-none")
				})
				
				$("#btnRealizarRegistro").on("click", function(e){
					e.preventDefault();
					$("#formVerificarRegistro")[0].reset();
					$("#divIniciarSesion").addClass("d-none")
					$("#divRegistrarse").removeClass("d-none");
				})

				//============= INICIAR SESION ============ 
				$("#btnVerificarRegistro").on("click", function(e){
					e.preventDefault();
					bloquearBoton("btnVerificarRegistro");
					$.post("funciones/ws_login.php", $("#formVerificarRegistro").serialize(), function(data){
						if(data.resultado){
							Swal.fire({icon:"success", title:"Exito", text:data.mensaje, confirmButtonText:"Aceptar" }).then((result)=>{
								location.reload();
							})

						}else{
							Swal.fire({icon:"warning", title:"Lo sentimos",  text:data.mensaje, confirmButtonText:"Aceptar"})

						}
						desbloquearBoton("btnVerificarRegistro");
					},"json")
					.fail(function(){
						desbloquearBoton("btnVerificarRegistro");
						Swal.fire({icon:"error", title:"Lo sentimos", text: "No existe conexion con el servidor", confirmButtonText:"Aceptar"})
					})
				})


				function bloquearBoton(boton){
					$("#btnVerificarRegistro").attr('data-kt-indicator', 'on');
					$("#btnVerificarRegistro").attr('disabled', true);
				}

			function desbloquearBoton(boton){
				$("#"+boton).removeAttr('data-kt-indicator');// Remove loading indication			
				$("#"+boton).removeAttr('disabled');// Remove loading indication			
			}


			})
		</script>
	</body>
	<!--end::Body-->
</html>