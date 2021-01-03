<?php

/* Header */
$pagetitle = "aktuell";
include_once "../_ressources/library/php-markdown/Michelf/Markdown.inc.php"; use \Michelf\Markdown;
include("../_ressources/parts/header.php");

/* Content */

echo "<article>";
ob_start();
$article = "2015-02-07";
include($article . ".md");
$content = ob_get_clean();
$my_html = Markdown::defaultTransform($content);
echo "$my_html";
echo "</article>";
echo "</div>";

echo "<div class='seite'>";
echo "<article>";
ob_start();
$article = "2014-05-07";
include($article . ".md");
$content = ob_get_clean();
$my_html = Markdown::defaultTransform($content);
echo "$my_html";
echo "</article>";
echo "</div>";

echo "<div class='seite'>";
echo "<article>";
ob_start();
$article = "2014-04-17";
include($article . ".md");
$content = ob_get_clean();
$my_html = Markdown::defaultTransform($content);
echo "$my_html";
echo "</article>";
echo "</div>";

echo "<div class='seite'>";
echo "<article>";
ob_start();
$article = "2014-03-03";
include($article . ".md");
$content = ob_get_clean();
$my_html = Markdown::defaultTransform($content);
echo "$my_html";
echo "</article>";
echo "</div>";

echo "<div class='seite'>";
echo "<article>";
ob_start();
$article = "2014-02-18";
include($article . ".md");
$content = ob_get_clean();
$my_html = Markdown::defaultTransform($content);
echo "$my_html";
echo "</article>";

/* Footer */
include("../_ressources/parts/footer.php");

?>
