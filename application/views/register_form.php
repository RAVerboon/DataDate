<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id='main'>
	<?php echo form_open('register');?>
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
</div>