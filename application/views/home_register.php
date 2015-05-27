<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id='main'>
	<section id='mainLeft'>
		<h1>Op zoek naar liefde?</h1>
		<h3>Registreer nu!</h3>
		<form method="post" action="index.php/user/register">
			<ul id='registerForm'>
				<li><label for='username'>Gebruikersnaam:</label><input type='text' name='username' /></li>
				<li><label for='realName'>Voor- en achternaam:</label><input type='text' name='realName' /></li>
				<li><label for='birthDay'>Geboortedatum:</label><input type='date' name='birthDay' /></li>
				<li>
					<label for='gender'>Geslacht:</label>
					<select name='gender'>
						<option name='male'>Man</option>
						<option name='female'>Vrouw</option>
					</select>
				</li>
				<li>
					<label for='minimumAge'>Minimumleeftijd:</label>
					<input type='number' name='minimumAge'>
				</li>
				<li>
					<label for='maximumAge'>Maximumleeftijd:</label>
					<input type='number' name='maximumAge'>
				</li>
				<li>
					<input type='submit' name='submit' value='Registreer' id='registerSubmit'>
				</li>
			</ul>
		</form>
	</section>
	<section id='mainRight'>
		De bijzonderheid in onze site is dat ons dating paradigma gebaseerd is op een unieke en wetenschappelijk correct bewezen profilerings- en matching techniek die zowel de persoonlijkheid als de lifestyle in de "dating equation" meeneemt en leert van de voorkeuren van de gebruiker om de dating ervaring te optimaliseren. Tot op zekere hoogte is dit al eens eerder vertoond (BrandDating.nl voor dating op basis van lifestyle - deze site is kennelijk wegen succes beëindigd - en Parship voor dating op basis van persoonlijkheid), maar wij hebben niet alleen betere technologieën; we combineren ook nog eens deze systemen en breiden ze uit met "playing field changing" zelflerende functionaliteit.
	</section>
</div>