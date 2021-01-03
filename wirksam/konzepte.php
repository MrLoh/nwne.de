<?php 

/* Header */
$pagetitle = "konzepte";
include_once "../_ressources/library/php-markdown/Michelf/Markdown.inc.php"; use \Michelf\Markdown;
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
