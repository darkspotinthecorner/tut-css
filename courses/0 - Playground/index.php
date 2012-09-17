<?php

require_once('../inc/ImpressJS.php');

$impress = new ImpressJS();

?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=1024" />
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<title>Bootstrap 101 Template</title>

		<meta name="description" content="" />
		<meta name="author" content="Martin Gelder" />

		<link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" />
		<link href="../assets/css/generic.css" rel="stylesheet" />
		<link href="../assets/prettify/prettify.css" rel="stylesheet" />
		<link href="style.css" rel="stylesheet" />

		<link rel="shortcut icon" href="../assets/icons/favicon.png" />
		<link rel="apple-touch-icon" href="../assets/icons/apple-touch-icon.png" />
	</head>
	<body>
		<div id="menu">
			<div class="btn-group">
				<button class="btn"><b>1</b></button>
				<button class="btn"><b>2</b></button>
				<button class="btn"><b>3</b></button>
			</div>
		</div>
		<div id="impress">
			<div class="step slide" <?= $impress ?>>
				<h1>CSS - Grundlagen</h1>
				<h2>Martin Gelder 2012</h2>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1>Was ist CSS?</h1>
				<ul>
					<li>CSS steht für <b>C</b>ascading <b>S</b>tyle <b>S</b>heets</li>
					<li>Es handelt sich um eine deklarative Sprache</li>
					<li>Dient als Stilvorlage für strukturierte Dokumente (meist HTML)</li>
				</ul>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1>Einbinden von CSS</h1>
				<p>Inline <span class="sub">(schlechte Idee&trade;)</span></p>
				<p><pre class="prettyprint lang-html"><?= htmlspecialchars('<div style="Deklaration(en)"> ... </div>') ?></pre></p>
				<p>Eingebettet <span class="sub">(bevorzugt im <code class="prettyprint lang-html"><?= htmlspecialchars('<head>') ?></code>)</span></p>
				<p><pre class="prettyprint lang-html"><?= htmlspecialchars('<style type="text/css"> {CSS Code} </style>') ?></pre></p>
				<p>Extern <span class="sub">(bevorzugt im <code class="prettyprint lang-html"><?= htmlspecialchars('<head>') ?></code>)</span></p>
				<p><pre class="prettyprint lang-html"><?= htmlspecialchars('<link href="datei.css" type="text/css" />') ?></pre></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1>CSS Code</h1>
				<p>Ein CSS Code Block kann beliebig viele Regeln aufnehmen</p>
				<p><pre class="prettyprint lang-css">
/* Schreibweise einer Regel:
Selektor(en) {
	Deklaration(en)
}
*/

body {
	font-family: Tahoma, Arial, sans-serif;
	font-size: 12px;
}

header, footer { font-size: 14px; }</pre></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1>Selektoren</h1>
				<p>Selektoren legen fest auf welche HTML Elemente die Regel zutrifft</p>
				<p>Es gibt 3 direkte Selektorarten</p>
				<p><pre class="prettyprint lang-css">
a     { /* Alle &lt;a&gt; Elemente */ }

.info { /* Alle Elemente mit class="info" */ }

#main { /* Das Element mit id="main" */ }
</pre></p>
			</div>





			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1>Deklarationen</h1>
				<p>Belegen eine Eigenschaft mit einem Wert(en)</p>
				<p><pre class="prettyprint lang-css">
/* Schreibweise einer Deklaration:
Eigenschaft : Wert(e) ;
*/

color : #ffbb00 ;</pre></p>
				<p>Beliebig viele Deklarationen pro Block</p>
				<p>Trennung durch ein Semikolon</p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1>Verkürzte Deklarationen</h1>
				<p>Die ausführliche Schreibweise ...</p>
				<p><pre class="prettyprint lang-css">
padding-top: 3px;
padding-right: 1em;
padding-bottom: 15px;
padding-left: 1.5em;</pre></p>
				<p>... kann auch verkürzt notiert werden</p>
				<p><pre class="prettyprint lang-css">padding: 3px 1em 15px 1.5em;</pre></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<h1></h1>
				<p></p>
			</div>








		</div>

		<script src="../assets/js/jquery-1.8.1.js"></script>

		<script src="../assets/bootstrap/bootstrap.js"></script>

		<script src="../assets/prettify/prettify.js"></script>
		<script src="../assets/prettify/lang-css.js"></script>

		<script src="../assets/js/impress.js"></script>

		<script>
			$(function() {
				impress().init();
				prettyPrint();
			});
		</script>
	</body>
</html>