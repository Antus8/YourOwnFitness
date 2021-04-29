<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Calcolo IMC  -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Calcolo IMC </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Calcolo IMC" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
	 <link rel="stylesheet" type="text/css" href="css/styles.css">
<!-- Script javascript per calcolo BMI -->
<script type="text/javascript">
		function computeBMI()
		{
				//Obtain user inputs
				var height=Number(document.getElementById("height").value);
				var heightunits=document.getElementById("heightunits").value;
				var weight=Number(document.getElementById("weight").value);
				var weightunits=document.getElementById("weightunits").value;


				//Convert all units to metric
				if (heightunits=="inches") height/=39.3700787;
				if (weightunits=="lb") weight/=2.20462;

				//Perform calculation
				var BMI=weight/Math.pow(height,2);

				//Display result of calculation
				document.getElementById("output").innerText=Math.round(BMI*100)/100;

				if (output<18.5)
				document.getElementById("comment").value = "Underweight";
				if (output>=18.5 && output<=25)
				document.getElementById("comment").value = "Normal";
				if (output>=25 && output<=30)
				document.getElementById("comment").value = "Obese";
				if (output>30)
				document.getElementById("comment").value = "Overweight";
				document.getElementById("answer").value = output;
		}
</script>
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

		<div id="content">
		 <div id="front1">
			 <h1 style="margin-left: 14px; color: rgb(192, 109, 26)">
				 Your Own Fitness, la scelta <br>giusta per il tuo fisico!
			 </h1>
		 </div>
	</div>
		<!-- Qui andrà lo script per il calcolo dell'IMC -->
	<div id="Registration-Form">
		<div class="container">
			<p id="pre">L'<b>indice di massa corporea</b> (abbreviato IMC o BMI, dall'inglese <i>body mass index</i>) è un dato biometrico, espresso come rapporto
				 					tra peso e quadrato dell'altezza di un individuo ed è utilizzato come un indicatore dello stato di peso forma. Secondo l'Organizzazione Mondiale
									della Sanità l'IMC, o indice di massa corporea, è raggruppabile in 4 categorie:
									<ul id="pre">
										<li> sottopeso (IMC al di sotto di 19)</li><br>
										<li> medio (IMC compreso tra 19 e 24)</li><br>
										<li> sovrappeso (IMC compreso tra 25 e 30)</li><br>
										<li> obesità (IMC al di sopra di 30)</li><br>
									</ul><p>
			<p id="pre" style="color: red"><b>ATTENZIONE!</b></p>
			<p id="pre">L'altezza è in metri (o inches)! Indicare la propria altezza con un punto (Es. 1.80m)</p>
			<hr>
			<br>
			<div class="title">BMI Calculator (inserisci i dati)</div>
				<br>
				<form action="javascript:void(0)">
				<div class="user-details">
				<div class="input-box">
				<span class="details">Altezza</span><br>
					<input type="text" id="height" style="width: 30%"required/>
					<select type="multiple" id="heightunits" style="
					height: 46px;
					width: 30%;
					outline: none;
					font-size: 16px;
					border-radius: 5px;
					padding-left: 15px;
					border: 1px solid #ccc;
					border-bottom-width: 2px;
					transition: all 0.3s ease;
					">
					<option value="metres" selected="selected">metri</option>
					<option value="inches">inches</option>
					</select>
				</div>
				<br><br>
				<div class="input-box">
					<span class="details">Peso</span><br>
					<input type="text" id="weight" style="width: 30%" required/>
					<select type="multiple" id="weightunits" style="
					height: 46px;
					width: 30%;
					outline: none;
					font-size: 16px;
					border-radius: 5px;
					padding-left: 15px;
					border: 1px solid #ccc;
					border-bottom-width: 2px;
					transition: all 0.3s ease;
					">
						<option value="kg" selected="selected">kilogrammi</option>
						<option value="lb">pounds</option>
					</select>
				</div>
		</div>

			<div class="button">
				<input type="submit" name="calculate" value="Calcola il tuo IMC!" onclick="computeBMI();">
			</div>
			<h1>Il tuo IMC &egrave;: <span id="output">-</span></h1>
			<hr>
			<p id="pre">Controlla la tabella sottostante per confrontare il tuo <b>IMC</b><p>
<!-- Tabella BMI -->
			<img src="images/IMG2.jpeg" alt="Tabella BMI" width="800px"/>

		</form>

		</div>
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
