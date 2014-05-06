<?php 

/* Header */
$pagetitle = "impressum";
include_once "../_ressources/library/php-markdown/Michelf/Markdown.php"; use \Michelf\Markdown;
include("../_ressources/parts/header.php");

/* Content */
ob_start();
include($pagetitle . ".md");
$content = ob_get_clean();
$my_html = Markdown::defaultTransform($content);
echo "$my_html";

/* Footer */
include("../_ressources/parts/footer.php");

?>
