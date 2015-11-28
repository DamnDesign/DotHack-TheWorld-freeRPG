<!DOCTYPE html>
<html lang=de>

	<head>	<!-- Informationen über die Webseite -->
		<meta charset="utf-8">
		<title>Projekt DotHack</title>
		
		<meta name="describtion" content="Hier finden Sie unser Projekt 'DotHack-TheWorld-freeRPG'">
		
		<link href="style.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<div id="header">
		</div>	<!-- HEADER ENDE -->
		
		<div class="wrapper leftmenu">
		
			<div id="navi">
	
					<div id="menu">
												
						<ul>
							<li id="spiel"><a href="#spiel.html"><img src="#" alt="Spiel"></a></li>
							<li id="character"><a href="#character.html"><img src="#" alt="Characterbogen/ Skills"></a></li>
							<li id="wiki"><a href="#wiki.html"><img src="#" alt="Wiki"></a></li>
							<li id="about"><a href="#about_us.html"><img src="#" alt="About us"></a></li>
							<li id="kontakt"><a href="#kontakt.php"><img src="#" alt="Kontaktformular"></a></li>
						</ul>	
						
					</div> <!-- menu ENDE -->
			</div> <!-- navi ENDE -->	
					
			<div id="main">
				
				<?php
				
					$mail = isset($_POST['mail']) ? $_POST['mail'] : "";
					$nachricht = isset($_POST['nachricht']) ? $_POST['nachricht'] : "";

				?>

				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="formular">

					<p>
						<label for="mail">E-Mail-Adresse</label><br />      
						<input id="mail" type="email" name="mail" value="<?php echo $mail; ?>" />
					</p>

					<p>
  						<label for="nachricht">Nachricht</label><br />      
						<textarea id="nachricht" type="text" name="nachricht" cols="40" rows="5"><?php echo $nachricht; ?></textarea>
					</p>

					<p>     
						<input id="senden" type="submit" name="senden" value="Senden" />
					</p>

				</form>

				<?php

					if(isset($_POST['senden']))
					{
	
						$mail = $_POST['mail'];
						$nachricht = $_POST['nachricht'];
	
						if(empty($mail))
						{
							echo "<script>alert('Bitte eine E-Mail-Adresse eingeben.')</script>";
							echo "<script>document.formular.mail.focus()</script>"; //legt Cursor ins Eingabefeld
							exit;
						}
	
						if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,5}$/", $mail)) // überprüft ob eine E-Mail Adresse eingegeben wurde.
						{
							echo "<script>alert('Bitte eine richtige E-Mail-Adresse eingeben.')</script>";
							echo "<script>document.formular.mail.focus()</script>"; //legt Cursor ins Eingabefeld
							exit;
						}
				
						echo "<hr>";
						echo "E-Mail-Adresse: $mail <br />";
						echo "Nachricht: $nachricht <br />";

						$betreff = "Kontaktformular";
	

						$inhalt = "E-Mail-Adresse: " . $mail . "\n\n";
						$inhalt .= $nachricht;
	
						mail("email@adresse.de", $betreff, $inhalt); //hier muss die richtige E--Mail eingetragen werden, welche man für Kontaktanfragen benutzt
	
						echo "<script>alert('Das Formular wurde erfolgreich verschickt.')</script>";
	
					}
				?>
			</div> <!-- main ENDE -->		
					
			
				
			
		
		</div><!-- wrapper ENDE -->

		
		
		
	</body>

</html>

<!--
=== Kommentar Alpers, nov 27 ===

Wenn Sie PHP mit <?php ?> in ein HTML-Dokument integrieren, dann sollte die Datei weiterhin auf .html enden.
Ansonsten ein guter Anfang.

=== Kommentar
