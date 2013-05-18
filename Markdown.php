<!DOCTYPE html>
<html>
	<!-- Header -->
	<head> 
		<meta charset="utf-8"> 
		<title>
			Markdown Leitfaden 
		</title> 
		<link rel="stylesheet" href="main.css">
	</head>
	<!-- Body -->
	<body>
	<?php 
		include_once "library/php-markdown/Michelf/Markdown.php"; 
		use \Michelf\Markdown;
		?>
		<div id="center">
			<div class="content">
				<!-- Navigation -->
				<div class="nav">
					<h1 class="hidden"> 
						Navigation 
					</h1>
					<div>
						<a href="index.php"><span class="orange">ak</span>tuell</a>
					</div>
					<div>
						<a href="index.php">ver<span class="orange">net</span>zt</a>
					</div>
					<div>
						<a href="index.php"> <span class="orange">wirk</span>sam</a>
						<ul>
							<li>- <a href="index.php">konzepte</a></li>
							<li>- <a href="index.php">studien</a></li>
							<li>- <a href="index.php">broschüren</a></li>
							<li>- <a href="index.php">bildung</a></li>
						</ul>
					</div>
					<div>
						<a href="index.php"> err<span class="orange">eich</span>bar </a>
					</div>
				</div>
			<!-- Kopfzeile -->
				<div class="kopfzeile"> 
					<span></span>
					<div id="logo">
						<span> <span class="orange">netz</span>werk<br> neue <span class="orange">energie</span> </span>
					</div> 
				</div>
			<!-- Inhalt -->
				<div class="seite">
					<?php 
						ob_start();
						include("MarkdownLeitfaden.md");
						$content = ob_get_clean();
						$my_html = Markdown::defaultTransform($content);
						echo "$my_html";
					?>
				</div>
				<div class="seite">
					Hier kannst du den Quelltext des Markdown Leitfadens, welcher die obere Seite Erzeugt aufrufen und herunterladen: <br><br>
					<a href="MarkdownLeitfaden.md"> <img src="ressources/MD.png" alt="MarkdownLeitfaden.md" class="icon"> MarkdownLeitfaden.md </a>
				</div>

			</div>
		</div>
	</body>
</html>