<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>HackkcaH VPN</title>
		<meta charset="UTF-8">
		<meta name="author" content="HackkcaH">
		<meta name="description" content="Status de nossos serviços.">
		<meta name="msapplication-TileColor" content="#000000">
		<meta name="theme-color" content="#000000">
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
		<link rel="shortcut icon" href="/images/logos/logosite.png" type="image/x-png"/>
		<?php require_once($_SERVER['DOCUMENT_ROOT']."/php/allcssjs.php"); $s=$_GET["s"]; ?>
	</head>

	<style>
	.container{
				min-width: 100%;
				min-height: 100%;
	}
	.port-ext{
				padding: 15px;
				font-size: 16px;
				background-color: rgba(0, 0, 0, 0.28);
	}
	.port-int{
				display: inline-flex;
	}
	.foto, .inicio{
		    padding: 15px;
				color: white;
	}
	</style>

	<body class="landing1">
			<section id="main" class="wrapper">
			<div class="container">
				<header class="major">
					<style>
					.start1{
						transform: scale(1.5);
					}
					.start{
						max-width: 540px;
						background:url("https://hackkcah.xyz/images/image.jpg");
						font-family: monospace;
						margin: 0;
						position: relative;
						left: 50%;
						transform: translate(-50%, 20%);
						margin-bottom: 120px;
					}
					.profile1{
					  height: 105px;
					  border-radius: 60px;
					  border-width: 2px;
					  border-style: solid;
					  border-color: white;
					}
					#container{
					  border-color: rgba(0, 0, 0, 0.62);
					  align-items: center;
					  display: flex;
					  border-style: solid;
					  border-width: 5px;
					  background: rgba(0, 0, 0, 0.42);
					}
					#container .row1{
					  width: 50%;
					  color: white;
					  font-size: 12px;
					  display: block!important;
					}
					#container .row2{
					  font-size: 18px;
					  background: white;
					  height: 270px;
					  padding-left: 60px;
					  display: -webkit-inline-box;
					  width: 270px;
						text-align: initial;
					}
					#container .icones {
					  margin-left: 20px;
					  margin-top: 55px;
					  display: table-caption;
					  line-height: 27px;
					}
					#container .text {
					  margin-top: 55px;
					  margin-left: 45px;
					  line-height: 27px;
						font-size: 15px;
					}
					#container .ini {
					    display: contents;
					}
					#container .row3 {
					    margin-left: -60px;
					    padding: 5px;
					}
					#container h2 {
					  font-size: 10px;
					  padding: 5px;
					  background: #00000066;
					  color: white;
					  border-radius: 10px;
					  margin-top: -2px;
					  margin-left: 4px;
					}
					#container h3 {
						font-size: 14px;
					}
					#container .row99 {
					    display: flex;
					}
					#container i.fas.fa-user-circle {
					    font-size: 24px;
					    z-index: 99;
					}
					#container #op{
					  cursor: pointer;
					}
					@media screen and (max-width: 820px){
						#container{
							display: inline-block;
						}
						#container .row1 {
					    width: 100%;
							margin-bottom: 30px;
							margin-top: 20px;
						}
						#container .row2 {
						    padding-left: 60px;
						}
						.start {
						    width: 280px;
								margin-bottom: 260px;
						}
			  	}
					.row3, .row{
						overflow: auto;
					}

					@media screen and (min-width: 358px) and (max-width: 400px){
						#main{
							transform: scale(0.9);
						}
					}

					@media screen and (min-width: 315px) and (max-width: 357px){
						#main{
							transform: scale(0.8);
						}
					}

					@media screen and (min-width: 280px) and (max-width: 314px){
						#main{
							transform: scale(0.7);
							margin-left: -5px;
						}
					}

					@media screen and (min-width: 250px) and (max-width: 279px){
						#main{
							transform: scale(0.6);
							margin-left: -18px;
						}
					}

					@media screen and (min-width: 200px) and (max-width: 249px){
						#main{
							transform: scale(0.5);
							margin-left: -40px;
						}
					}
					t{
						font-family: serif;
					}
					c{
						font-family: inherit;
						font-size: smaller;
					}
					g{
						float: right;
					}
					</style>
					<script>
					function hideall(){
					  document.getElementById("ini").style.display = "none";
					  document.getElementById("sob").style.display = "none";
					  document.getElementById("edu").style.display = "none";
					  document.getElementById("hab").style.display = "none";
					  document.getElementById("exp").style.display = "none";
					  document.getElementById("int").style.display = "none";
					}
					function ini(){ hideall(); document.getElementById("ini").style.display = "contents"; }
					function sob(){ hideall(); document.getElementById("sob").style.display = "block"; }
					function edu(){ hideall(); document.getElementById("edu").style.display = "block"; }
					function hab(){ hideall(); document.getElementById("hab").style.display = "block"; }
					function exp(){ hideall(); document.getElementById("exp").style.display = "block"; }
					function int(){ hideall(); document.getElementById("int").style.display = "block"; }
					</script>
					  <div class="start1">
							<div class="start">
					        <div id="container">
					          <div class="row1">
					            <center>
					              <div><img class="profile1" src="https://lh4.googleusercontent.com/-aTQmnjRK-_M/AAAAAAAAAAI/AAAAAAAAF3Q/aOCqnHB7QGA/photo.jpg"></img></div>
					              <div>Walteir Junio</div>
					              <div>Programador Junior<p></div>
					              <div><i class="fas fa-envelope"></i> walteirjr2014@hotmail.com</div>
					              <div><i class="fab fa-whatsapp"></i> +55 62 9 9579-3335</div>
					              <div><i class="fab fa-telegram"></i> @HackkkcaH</div>
					            </center>
					          </div>
					          <div class="row2">
					            <div class="ini" id="ini">
					              <div class="icones">
						              <i class="fas fa-user"></i>
						              <i class="fas fa-user-graduate"></i>
						              <i class="fas fa-puzzle-piece"></i>
						              <i class="fas fa-toolbox"></i>
						              <i class="fas fa-heart"></i>
					              </div>
					              <div class="text">
						              <a onclick="sob()"><div id="op">Sobre mim</div></a>
						              <a onclick="edu()"><div id="op">Educação</div></a>
						              <a onclick="hab()"><div id="op">Habilidades</div></a>
						              <a onclick="exp()"><div id="op">Experiencias</div></a>
						              <a onclick="int()"><div id="op">Interesses</div></a>
					              </div>
					            </div>
					            <div class="row3">
					              <div class="sob" id="sob" style="display:none;">
					                <div class="row99">
					                  <i class="fas fa-user"></i><h2><a onclick="ini()" id="op">Inicio</a> > Sobre Mim</h2>
					                </div>
														<h3>
															<t>Nome Completo:</t></br>
															<c>Walteir Junio Martins Da Silva</c>
														</h3>
														<h3>
															<t>Idade</t></br>
															<c><?php $idade = date("Y") - 1999; echo $idade; ?></c>
														</h3>
														<h3>
															<t>Profissão atual:</t></br>
															<c>Autônomo</c>
														</h3>
														<h3>
															<t>Residente:</t></br>
															<c>Goiânia-Goiás</c>
														</h3>
														<h3>
															<t>Caracteristicas Pessoais:</t></br>
														  <c>Focado, dedicado, busco sempre aumentar meus conhecimentos na minha área de atuação, observador, atento aos detalhes buscando sempre melhores resultados.</c>
														</h3>
					              </div>
					              <div class="edu" id="edu" style="display:none;">
					                <div class="row99">
					                  <i class="fas fa-user-graduate"></i><h2><a onclick="ini()" id="op">Inicio</a> > Educação</h2>
					                </div>
					                <h3>
														<h3>
															<t>Cursos:</t></br>
															<c>PHP basico ao avançado </br> Digital Innovation</c></br></br>
															<c>Basico JavaScript </br> Alura</c></br></br>
															<c>Ingles Basico</c></br></br>
															<c>Montagem manutenção micro basico ao avançado</c></br></br>
															<c>Manutenção infraestrutura de rede</c></br></br>
														</h3>
													</h3>
					              </div>
					              <div class="hab" id="hab" style="display:none;">
					                <div class="row99">
					                  <i class="fas fa-puzzle-piece"></i><h2><a onclick="ini()" id="op">Inicio</a> > Habilidades</h2>
					                </div>
					                <h3>
														<h3>
															<t>Liguagens de programação:</t></br></br>
															<c><f>PHP</f>    <g>Intermediario</g></c></br>
															<!-- <c><f>HTML</f>   <g>Intermediario</g></c></br>
															<c><f>CSS</f>    <g>Intermediario</g></c></br> -->
															<c><f>JS</f>     <g>Basico</g></c></br>
															<c><f>MYSQL</f>  <g>Basico</g></c>
														</h3>
													</h3>
					              </div>
					              <div class="exp" id="exp" style="display:none;">
					                <div class="row99">
					                  <i class="fas fa-toolbox"></i><h2><a onclick="ini()" id="op">Inicio</a> > Experiencias</h2>
					                </div>
					                <h3>
														<h3>
															<t>Experiencias:</t></br></br>
															<c>Este site</c></br></br>
															<c>Sistema de monitoramento de servidores</c></br></br>
															<c>ChatBot para a plataforma telegram</c></br></br>
														</h3>
													</h3>
					              </div>
					              <div class="int" id="int" style="display:none;">
					                <div class="row99">
					                  <i class="fas fa-heart"></i><h2><a onclick="ini()" id="op">Inicio</a> > Interesses</h2>
					                </div>
					                <h3>NADA AINDA</h3>
					              </div>
					              </div>
					          </div>
					        </div>
					    </div>
						</div>
					</header>
				</div> </br>
			</section>
	</body>
</html>
