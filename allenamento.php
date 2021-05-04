<?php
session_start();
require "conn.php";
require "dbclass.php";
$db = new DB_functions();
$type = $_POST['submit'];

if ($type == "Allenamento"){
	$trainings = $db->getAllTrainingsNoDupl($conn);
}
else $trainings = $db->getTrainingsPerTypeNoDupl($type,$conn);
$length = mysqli_num_rows($trainings);
?>



<!-- Utilizzo l'iframe in modo da poter visualizzare le diverse schede sulla stessa pagina "allenamento.php" -->
<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Allenamento -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Allenamento </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Allenamento" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
	 <link rel="stylesheet" type="text/css" href="css/styles.css">

	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	   <!-- Latest compiled and minified CSS -->
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	   <!-- Optional theme -->
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	   <!-- Latest compiled and minified JavaScript -->
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
 </head>

 <body>
<!-- Testata del sito, Logo del sito -->
<header>

	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="login.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Login
	</a></div>

	<img class="Logo" width="10%" src="images/logo.png" alt="Il logo andrà qui"/>

</header>

<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<nav>
	<ul>
		<!-- Home -->
		<li><form id="homeform" action="index.php" method="get">
			<input class="submit1" type="submit" name="submit" id="homesubmit" value="Home">
		</form></li>

		<!-- Menù a tendina -->
		<li class="dropdown">

		<!-- Allenamento -->
		<form id="allenamentoform" action="#" method="post">
				<input class="submit1" type="submit" name="submit" id="allenamentosubmit" value="Allenamento">

			<div class="dropdown-content">

				<input class="submit" type="submit" name='submit' id="cardiosubmit" value="Cardio">
				<hr>

				<input class="submit" type="submit" name='submit' id="pesisubmit" value="Pesi">
				<hr>

				<input class="submit" type="submit" name='submit' id="clsubmit" value="Corpo Libero">
				<hr>
				</script>
			</div>
		</form>
		</li>
		<!-- Fine menù a tendina -->

		<!-- Calcolo IMC -->
		<li><form id="imcform" action="imc.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="imcsubmit" value="Calcolo IMC">
		</form></li>

		<!-- Diete -->
		<li><form id="dieteform" action="diete.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="dietesubmit" value="Diete">
		</form></li>

		<!-- Consulenze -->
		<li><form id="imcform" action="consulenza.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="consulenzasubmit" value="Consulenze">
		</form></li>

		<!-- Contatti -->
		<li><form id="imcform" action="contatti.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="imcsubmit" value="Contatti">
		</form></li>

		<!-- Vecchio menù a tendina
		<li><a href="imc.php">Calcolo IMC</a></li>
		<li><a href="diete.php">Diete</a></li>
		<li><a href="consulenza.php">Consulenze</a></li>
		<li><a href="contatti.php">Contatti</a></li> -->
	</ul>
</nav>

	<div id="content">
		 <div id="front1">
			 <h1 style="margin-left: 14px; color: rgb(192, 109, 26)">
				 Your Own Fitness, la scelta <br>giusta per il tuo fisico!
			 </h1>
		 </div>
	</div>

		<!-- Qui andranno le varie schede di allenamento attraverso l'iframe. Utilizzare4 iframe anche per linkare i video tutorial di determinati esercizi su YouTube -->
		
		
		<div id="Presentation">
		<?php if (($_POST['submit'] == "Cardio") || ($_POST['submit'] == "Allenamento")): ?>
<?php if($_POST['submit'] == "Allenamento"): $trainings = $db->getTrainingsPerTypeNoDupl("Cardio",$conn); $length = mysqli_num_rows($trainings); endif; ?>
<h1><a name= "CARDIO"><p class="w3-container" style="color:rgb(192, 109, 26);text-align:center"><strong>CARDIO</strong></p></a></h1>

			<div>
				<!-- Qui vanno gli allenamenti -->
				
				<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="align-content: center;">
					<li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
					<?php for ($x = 1; $x < $length; $x++){?>
					<li data-target="#carousel-example-generic2" data-slide-to="<?php echo $x;?>"></li>
					<?php } ?>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  
					<div class="item active">
						<h1 id = "nome"><?php $resrow = mysqli_fetch_row($trainings); echo "Allenamento: ". strtoupper($resrow[0]); ?></h1>
						<img class="w3-image" src="./images/CARDIO1.jpg" style="width:100%" >
					  <div class="carousel-caption">
						  <button type="button"class="btn btn-secondary" style="align-items: left; height: 1%; width: 50%" data-toggle="modal" data-target="#Mymodal"><a><strong>SELEZIONA E VISUALIZZA LA SCHEDA</a></strong></button>

					  </div>
					</div>
					<?php for ($x = 1; $x < mysqli_num_rows($trainings); $x++){ $resrow = mysqli_fetch_row($trainings); ?>
					<div class="item">
					<h1 id = "nome"><?php echo "Allenamento: ". strtoupper($resrow[0]); ?></h1>
					<img class="w3-image" src="./images/CARDIO1.jpg" style="width:100%">

					<div class="carousel-caption">
					<button type="button"class="btn btn-warning" style="height: 1%; width: 50%" data-toggle="modal" data-target="#Mymodal1"><a>SELEZIONA E<br></br>VISUALIZZA LA SCHEDA</a> </button>
					</div>
					</div>
					<?php }?>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				  <!-- <button type="button"class="w3-btn w3-ripple w3-orange" style="align-items:center;height: 1%; width: 100%" data-toggle="modal" data-target="#Mymodal"> </button> -->
				</div>
				
		</div>
<?php endif; ?>
		<?php if (($_POST['submit'] == "Pesi") || ($_POST['submit'] == "Allenamento")): ?>
			<?php if($_POST['submit'] == "Allenamento"): $trainings = $db->getTrainingsPerTypeNoDupl("Pesi",$conn); $length = mysqli_num_rows($trainings); endif; ?>
			<h1><a name= "PESI"><p class="w3-container" style="color:rgb(192, 109, 26);text-align:center"><strong>ALLENAMENTO CON I PESI</strong></p></a></h1>

			<div>
				<!-- Qui vanno gli allenamenti -->
				
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="align-content: center;">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<?php for ($x = 1; $x < $length; $x++){?>
					<li data-target="#carousel-example-generic" data-slide-to="<?php echo $x;?>"></li>
					<?php } ?>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  
					<div class="item active">
						<h1 id = "nome"><?php $resrow = mysqli_fetch_row($trainings); echo "Allenamento: ". strtoupper($resrow[0]); ?></h1>
						<img class="w3-image" src="./images/PESI2.png" style="width:100%" >
					  <div class="carousel-caption">
						  <button type="button"class="btn btn-secondary" style="align-items: left; height: 1%; width: 50%" data-toggle="modal" data-target="#Mymodal"><a><strong>SELEZIONA E VISUALIZZA LA SCHEDA</a></strong></button>

					  </div>
					</div>
					<?php for ($x = 1; $x < mysqli_num_rows($trainings); $x++){ $resrow = mysqli_fetch_row($trainings); ?>
					<div class="item">
					<h1 id = "nome"><?php echo "Allenamento: ". strtoupper($resrow[0]); ?></h1>
					<img class="w3-image" src="./images/PESI2.png" style="width:100%">

					<div class="carousel-caption">
					<button type="button"class="btn btn-warning" style="height: 1%; width: 50%" data-toggle="modal" data-target="#Mymodal1"><a>SELEZIONA E<br></br>VISUALIZZA LA SCHEDA</a> </button>
					</div>
					</div>
					<?php }?>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				  <!-- <button type="button"class="w3-btn w3-ripple w3-orange" style="align-items:center;height: 1%; width: 100%" data-toggle="modal" data-target="#Mymodal"> </button> -->
				</div>
				
		</div>
		<?php endif; ?>
	
	<?php if (($_POST['submit'] == "Corpo Libero") || ($_POST['submit'] == "Allenamento")): ?>
		<?php if($_POST['submit'] == "Allenamento"): $trainings = $db->getTrainingsPerTypeNoDupl("Corpo Libero",$conn); $length = mysqli_num_rows($trainings);endif; ?>
	<h1><a name= "CORPO LIBERO"><p class="w3-container" style="color:rgb(192, 109, 26);text-align:center"><strong>CORPO LIBERO</strong></p></a></h1>

			<div>
				<!-- Qui vanno gli allenamenti -->
				
				<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="align-content: center;">
					<li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
					<?php for ($x = 1; $x < $length; $x++){?>
					<li data-target="#carousel-example-generic1" data-slide-to="<?php echo $x;?>"></li>
					<?php } ?>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  
					<div class="item active">
						<h1 id = "nome"><?php $resrow = mysqli_fetch_row($trainings); echo "Allenamento: ". strtoupper($resrow[0]); ?></h1>
						<img class="w3-image" src="./images/CORPOLIBERO2.jpg" style="width:100%" >
					  <div class="carousel-caption">
						  <button type="button"class="btn btn-secondary" style="align-items: left; height: 1%; width: 50%" data-toggle="modal" data-target="#Mymodal"><a><strong>SELEZIONA E VISUALIZZA LA SCHEDA</a></strong></button>

					  </div>
					</div>
					<?php for ($x = 1; $x < mysqli_num_rows($trainings); $x++){ $resrow = mysqli_fetch_row($trainings); ?>
					<div class="item">
					<h1 id = "nome"><?php echo "Allenamento: ". strtoupper($resrow[0]); ?></h1>
					<img class="w3-image" src="./images/CORPOLIBERO2.jpg" style="width:100%">

					<div class="carousel-caption">
					<button type="button"class="btn btn-warning" style="height: 1%; width: 50%" data-toggle="modal" data-target="#Mymodal1"><a>SELEZIONA E<br></br>VISUALIZZA LA SCHEDA</a> </button>
					</div>
					</div>
					<?php }?>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				  <!-- <button type="button"class="w3-btn w3-ripple w3-orange" style="align-items:center;height: 1%; width: 100%" data-toggle="modal" data-target="#Mymodal"> </button> -->
				</div>
				
		</div>
<?php endif; ?>


			<!-- .modal -->
<div class="modal fade" id="Mymodal">
			<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				&times;
			  </button>
			<h4 class="modal-title">
				Scheda
			  </h4>
			</div>
			<div class="modal-body">
				<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style>
				.table {
				border-spacing: 0;
				empty-cells: hide;
				}
				.table td {
				padding: 10px 20px;
				text-align: center;
				border-bottom: 1px solid #F4EEE8;
				transition: all 0.5s linear;
				}
				.table td:first-child {
				text-align: left;
				color: #3D3511;
				font-weight: bold;
				}
				.table th {
				padding: 10px 20px;
				color: #3D3511;
				border-bottom: 2px solid #F4EEE8;
				border-top-left-radius: 10px;
				border-top-right-radius: 10px;
				}
				.table td:nth-child(even) {
				background: #F6D27E;
				}
				.table td:nth-child(odd) {
				background: #D1C7BF;
				}
				.table th:nth-child(even)  {
				background: #F6D27E;
				}
				.table th:nth-child(odd)  {
				background: #D1C7BF;
				}
				.round-top {
				border-top-left-radius: 5px;
				}
				.round-bottom {
				border-bottom-left-radius: 5px;
				}
				tr:hover td{
				background: #D1C7BF;
				font-weight: bold;
				}
				</style>

				</head><body><table class="table">
				  <tbody><tr>
				    <th>NOME</th>
				    <th>ANTONIO</th>
				    <th>DURATA</th>
				    <th>5 WEEKS</th>
				    </tr><tr>
				    </tr><tr>
				    <th>COGNOME</th>
				        <th>CAMPOSEO</th>
				    </tr>

				<tr><th></th></tr>

				  <tr>
				    <th>DAY1</th>
				    <th>SPLIT : PUSH </th>
				    <th></th>
				    <th></th>
				    <th></th>
				    <th></th>
				    </tr>
				<tr>
				  <th>EXERCISE</th>
				  <th>REP GOAL</th>
				  <th>SETS</th>
				  <th>REC</th>
				  <th>TECNIQUE</th>
				  <th>NOTES</th>
				  </tr>
				 <tr>
				  <td class="round-top">PANCA PIANA </td> <!--EXERCISE-->
				  <td>20.3</td> <!--REP GOAL-->
				  <td>30.5</td> <!--SETS-->
				  <td>23.5</td> <!--REC-->
				  <td>40.3</td> <!--TECNIQUE-->
				  <td>tensione continua</td>
				 </tr>
				<tr>
				  <td>CROCI</td>
				  <td>50.2</td>
				  <td>40.63</td>
				  <td>45.23</td>
				  <td>39.3</td>
				</tr>
				<tr>
				  <td>PANCA INCLINATA </td>
				  <td>25.4</td>
				  <td>30.2</td>
				  <td>33.3</td>
				  <td>36.7</td>
				</tr>
				<tr>
				  <td class="round-bottom">IBM</td>
				  <td>20.4</td>
				  <td>15.6</td>
				  <td>22.3</td>
				  <td>29.3</td>
				</tr>
				</tbody></table>
				</body></html>





				</head><body><table class="table">

				<tr><th></th></tr>

				  <tr>
				    <th>DAY1</th>
				    <th>SPLIT : PUSH </th>
				    <th></th>
				    <th></th>
				    <th></th>
				    <th></th>
				    </tr>
				<tr>
				  <th>EXERCISE</th>
				  <th>REP GOAL</th>
				  <th>SETS</th>
				  <th>REC</th>
				  <th>TECNIQUE</th>
				  <th>NOTES</th>
				  </tr>
				 <tr>
				  <td class="round-top">PANCA PIANA </td> <!--EXERCISE-->
				  <td>4</td> <!--REP GOAL-->
				  <td>5</td> <!--SETS-->
				  <td>2'</td> <!--REC-->
				  <td>77%/80%/82.5%/85% 1CM</td> <!--TECNIQUE-->
				  <td>FERMO AL PETTO DI 1 SEC</td>
				 </tr>
				<tr>
				  <td>SPINTE PAN</td>
				  <td>50.2</td>
				  <td>40.63</td>
				  <td>45.23</td>
				  <td>39.3</td>
				</tr>
				<tr>
				  <td>PANCA INCLINATA </td>
				  <td>25.4</td>
				  <td>30.2</td>
				  <td>33.3</td>
				  <td>36.7</td>
				</tr>
				<tr>
				  <td class="round-bottom">IBM</td>
				  <td>20.4</td>
				  <td>15.6</td>
				  <td>22.3</td>
				  <td>29.3</td>
				</tr>
				</tbody></table>
				</body></html>


				</head><body><table class="table">
				<tr><th></th></tr>

				  <tr>
				    <th>DAY1</th>
				    <th>SPLIT : PUSH </th>
				    <th></th>
				    <th></th>
				    <th></th>
				    <th></th>
				    </tr>
				<tr>
				  <th>EXERCISE</th>
				  <th>REP GOAL</th>
				  <th>SETS</th>
				  <th>REC</th>
				  <th>TECNIQUE</th>
				  <th>NOTES</th>
				  </tr>
				 <tr>
				  <td class="round-top">PANCA PIANA </td> <!--EXERCISE-->
				  <td>20.3</td> <!--REP GOAL-->
				  <td>30.5</td> <!--SETS-->
				  <td>23.5</td> <!--REC-->
				  <td>40.3</td> <!--TECNIQUE-->
				  <td>tensione continua</td>
				 </tr>
				<tr>
				  <td>CROCI</td>
				  <td>50.2</td>
				  <td>40.63</td>
				  <td>45.23</td>
				  <td>39.3</td>
				</tr>
				<tr>
				  <td>PANCA INCLINATA </td>
				  <td>25.4</td>
				  <td>30.2</td>
				  <td>33.3</td>
				  <td>36.7</td>
				</tr>
				<tr>
				  <td class="round-bottom">IBM</td>
				  <td>20.4</td>
				  <td>15.6</td>
				  <td>22.3</td>
				  <td>29.3</td>
				</tr>
				</tbody></table>
				</body></html>

			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">
				Close
			  </button>
			<button type="button" class="btn btn-primary">
				Ok
			  </button>
			</div>
			</div>
			</div>
			</div>

<div class="modal fade" id="Mymodal1">
			<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				&times;
			  </button
			<h4 class="modal-title">
				Notification
			  </h4>
			</div>
			<div class="modal-body"> <?php

				if(mysqli_num_rows($trainings) > 0){?>
					<table style="width: 100%">
					<tr>
						<th>nome</th>
							<th>tipo</th>
							<th>nome esercizio </th>
							<th>peso</th>
							<th>serie</th>
							<th>reps</th>
						</tr>

					<?php for ($x = 0; $x < mysqli_num_rows($trainings); $x++){
						$resrow = mysqli_fetch_row($trainings);
						if($resrow[0] == "scheda 10"){
						$nome = $resrow[0];
						$peso = $resrow[4];
						$tipo = $resrow[1];
						$durata = $resrow[2];
						$nome_esercizio_attrezzo = $resrow[3];
						$serie = $resrow[5];
						$ripetizioni = $resrow[6];
						?>

						<tr><td><?php echo $nome; ?> </td> <td><?php echo $tipo;?></td><td><?php echo $durata;?></td><td><?php echo $nome_esercizio_attrezzo;?></td><td><?php echo $serie;?></td><td><?php echo $ripetizioni;?></td></tr>

				<?php   }
						}
					?></table><?php } ?>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">
				Close
			  </button>
			<button type="button" class="btn btn-primary">
				Ok
			  </button>
			</div>
			</div>
			</div>
			</div>
		</div>


<!-- STRUTTURA
SLIDER
bottone per accedere ai MODEL
MODEL
scheda model presa dal database
-->



				<!-- Prova a mettere un iframe con il video di Miletto -->
		<!--	<iframe style="position: relative"width="560" height="315" src="https://www.youtube.com/embed/CjMhgsKP0t0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>-->

	<footer>

			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="allenamento.php">Allenamento</a></li>
				<li><a href="imc.php">Calcolo IMC</a></li>
				<li><a href="diete.php">Diete</a></li>
				<li><a href="consulenza.php">Consulenze</a></li>
				<li><a href="contatti.php">Contatti</a></li>
			</ul>

			<div class="copyright">
				I contenuti presenti sul sito <b>"Your Own Fitness"</b> dei quali &egrave; autore il proprietario del sito <b>Barlo&Fitness</b>
				non possono essere copiati, riprodotti, pubblicati o redistribuiti perch&egrave; appartenenti all'autore stesso.
				&#200; vietata la copia e la riproduzione dei contenuti in qualsiasi modo o forma.
				&#200; vietata la pubblicazione e la redistribuzione dei contenuti non autorizzata espressamente dall’autore.
				<hr>Copyright © 2021 Your Own Fitness by Barlo&Fitness, BARLETTA Francesco Pio. All rights reserved
			</div>

	</footer>

</body>

</html>