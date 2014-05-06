<?php $pagetitle = "erreichbar"; include("../_ressources/parts/header.php"); ?>

<h1>Kontakt</h1>
<img class="contact" src="../_ressources/contacts/georg.jpg">
<p>Ich freue mich mit Ihnen ins Gespräch zu kommen. </p>
<h2>Schreiben sie mir eine Email</h2>
<form>
	<label for="email">Email:</label>
	<input type="email" id="email"><br>
	<label for="betreff">Betreff:</label>
	<input type="text" id="betreff"><br>
	<textarea rows=20 cols=50>
		
	</textarea><br>
	<input type="submit" value="Abschicken">
</form>

<?php include("../_ressources/parts/footer.php"); ?>