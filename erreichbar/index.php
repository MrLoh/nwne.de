<?php 
$pagetitle = "erreichbar"; 
include_once "../_ressources/library/php-markdown/Michelf/Markdown.php"; use \Michelf\Markdown;
include("../_ressources/parts/header.php"); 

/* Content */
ob_start();
include($pagetitle . ".md");
$content = ob_get_clean();
$my_html = Markdown::defaultTransform($content);
echo "$my_html";
?>

<!-- Nachricht Formular -->
<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$from = "From: $name<$email>";
$to = "gewalo@yahoo.de";
?>
<?php
if ( $_POST['submit'] ) {
	if ( ($name != "" || $email != "") && $message != "" ) {
		if ( mail($to, $subject, "Diese Nachricht wurde von $name ($email) über das Webformular versendet.\n\n" . $message, $from) ) {
			echo "<p class='notification'>Ihre Nachricht wurde erfolgreich versendet.</p>";
			if ( $email != "" ) {
				mail($email, $subject, "Die folgende Nachricht wurde von Ihnen über das Webformular des netzwerks neue energie versendet:\n\n" . $message, $from);
			}
		} else {
			echo "<p class='notification'>Ups, beim verschicken der Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.</p>";
		}
	} else {
		echo "<p class='notification'>Bitte geben Sie einen Namen und eine Nachricht ein.</p>";
	}
}
?>

<form method="post" action="index.php">
	<p class="input">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name">
	</p>
	<p class="input">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email">
	</p>
	<p class="input">
		<label for="betreff">Betreff:</label>
		<input type="text" id="betreff" name="subject">
	</p>
	<textarea name="message" rows=15 cols=50></textarea>
	<input type="submit" id="submit" value="Abschicken" name="submit" value="Submit">
</form>

<?php include("../_ressources/parts/footer.php"); ?>