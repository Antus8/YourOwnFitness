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
 </head>

 <body>
<!-- Testata del sito, Logo del sito -->
<header>

	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="login.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Login
	</a></div>

	<img src="#" alt="Il logo andrà qui"/>

</header>

<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
	<nav>
	 <ul>
		 <li><a href="index.php">Home</a></li>

		 <!-- Menù a tendina -->
		 <li class="dropdown">
			 <a href="javascript:void(0)">Allenamento</a>
			 <div class="dropdown-content">
				 <a href="#">Cardio<hr></a>
				 <a href="#">Pesi<hr></a>
				 <a href="#">Corpo<br> libero<hr></a>
			 </div>
		 </li>
		 <!-- Fine menù a tendina -->

		<li><a href="imc.php">Calcolo IMC</a></li>
 		<li><a href="diete.php">Diete</a></li>
 		<li><a href="consulenza.php">Consulenze</a></li>
 		<li><a href="contatti.php">Contatti</a></li>
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
			<h1>Sito in costruzione!<h1>
				<!-- Prova a mettere un iframe con il video di Miletto -->
			<iframe style="position: relative"width="560" height="315" src="https://www.youtube.com/embed/CjMhgsKP0t0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

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
