<!DOCTYPE="html">
<!-- Your Own Fitness - Esame Fondamenti Web -->
<!-- ATTENZIONE! Tutti i link e collegamenti saranno interni. Una volta messo il sito in web tali link dovranno essere esterni con path definite! -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Home </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF)" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
	 <link rel="stylesheet" type="text/css" href="css/styles.css">
 </head>

<!-- Corpo del sito, varie sezioni + script in PHP -->
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
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>

		<!-- Menù a tendina -->
		<li class="dropdown">
			<a href="allenamento.php">Allenamento</a>
			<div class="dropdown-content">
				<a href="allenamento.php">Cardio<hr></a>
				<a href="allenamento.php">Pesi<hr></a>
				<a href="allenamento.php">Corpo<br> libero<hr></a>
			</div>
		</li>
		<!-- Fine menù a tendina -->

		<li><a href="imc.php">Calcolo IMC</a></li>
		<li><a href="diete.php">Diete</a></li>
		<li><a href="consulenza.php">Consulenze</a></li>
		<li><a href="contatti.php">Contatti</a></li>
	</ul>
</nav>

<!--Contenuto del sito, qui andranno le altre sezioni dell'index.php -->
		<div id="content">
<!-- Titolo + Collegamento alla registrazione per contattare uno dei personal trainer -->
			<div id="front1">

				<h1 style="margin-left: 14px; color: rgb(192, 109, 26)">
					Your Own Fitness, la scelta <br>giusta per il tuo fisico!
				</h1>

				<div class="BoxModel"> <!-- Percorso per la registrazione -->
					<a href="consulenza.php" style="color: black; text-decoration: none" title="Clicca per compilare il form">
					Prenota subito una consulenza con uno dei nostri professionisti e scopri qual &egrave; l'allenamento giusto per te!
				</a></div>

			</div>
<!-- Presentazione di chi siamo, cosa offriamo & others.. -->
			<div id="Presentation">

				<h1 style="text-transform: uppercase">Chi siamo?</h1>
				<p>&#169; YourOwnFitness è un progetto nato nel Marzo del 2021 grazie al lavoro di 4 studenti frequentanti
									"Ingegneria Informatica e dell'Automazione" presso il <a href="http://www.poliba.it/" target="_blank" title="Link per www.poliba.it" style="color: #975806; text-decoration:none"><b>Politecnico di Bari</b></a>:</p>
				<ul>
					<li><b>BARLETTA</b> Francesco, Project Manager e Sviluppatore Web;</li><hr>
					<li><b>LONGO</b> Antonello, Sviluppatore Web;</li><hr>
					<li><b>LONGO</b> Pierluigi, Animation Designer;</li><hr>
					<li><b>CAMPOSEO</b> Antonio, Graphic Designer;</li><hr>
					<li><b>DI PALMA</b> Antonio, responsabile della Documentazione;</li>
				</ul>

				<h1 style="text-transform: uppercase">Perchè Your Own Fitness?</h1>
				<p>&#169; YourOwnFitness nasce in pieno periodo pandemico con un obiettivo principale: fornire gli elementi necessari per stare in salute da casa. <b>Come?</b></p>

				<ul class="list">
					<li><b style="color: #975806;">Allenamento:</b> gli allenamenti saranno divisi in base alla frequenza settimanale, difficolt&agrave; ecc.. Avrai la possibilità di scegliere tra le varie schede in base alle tue esigenze e/o condizione fisica.</li>
				<hr>
					<li><b style="color: #975806;">Indice di Massa Corporea:</b> vi &egrave; una sezione dedicata al calcolo dell'IMC (Indice di massa corporea), utilizzato come un indicatore dello stato di peso forma.
						 																	 Ti baster&agrave; semplicemente inserire il sesso, l'altezza e il peso.</li>
				<hr>
					<li><b style="color: #975806;">Diete:</b> scopri i nostri consigli per una dieta pi&ugrave; equilibrata, iperproteica, ipocalorica ecc.. sempre in base ai tuoi obiettivi!</li>
				<hr>
					<li><b style="color: #975806;">Consulenze:</b> il materiale messo da noi a disposizione non ti basta? Chiedi una consulenza con uno dei nostri Personal Trainer in modo completamente gratuito!
																 Compila il form da noi messo a disposizione. Uno dei nostri preparatori ti risponder&agrave; quanto prima possibile per ogni tua esigenza!</li>
				</ul>

				<!-- iFrame con playlist Spotify -->
				<h1 style="text-transform: uppercase; text-align: center">Segui la nostra playlist Spotify!</h1>
				<a href="https://open.spotify.com/embed/playlist/56otQpiMyvEFPuCxnjUNpf" target="_blank"><img width="20%" style="margin-left: 40%" src="images/spotify.png" alt="Playlist Spotify"/><a/>

				<iframe src="https://open.spotify.com/embed/playlist/56otQpiMyvEFPuCxnjUNpf" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
			</div>

		</div>

		<!-- Fine del sito Web, recap del Menù, Contatti e Copyright -->
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
