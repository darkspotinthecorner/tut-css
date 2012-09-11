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

		<!-- Bootstrap -->
		<link href="../assets/css/bootstrap.css" rel="stylesheet" />
		<link href="../assets/css/generic.css" rel="stylesheet" />
		<!-- <link href="../../impress-demo/style.css" rel="stylesheet" /> -->
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
			<div id="aaa" class="step slide" <?= $impress ?>>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
			</div>
			<div id="bbb" class="step slide" <?= $impress->moveRight(1000)->rotateY(5) ?>>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
			</div>
			<div id="ccc" class="step slide" <?= $impress->moveRight(1000)->rotateY(5) ?>>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
			</div>
			<div id="ddd" class="step slide" <?= $impress->moveRight(1000)->rotateY(5) ?>>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
			</div>
			<div id="eee" class="step slide" <?= $impress->moveRight(1000)->rotateY(5) ?>>
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
			</div>
<?php
			/*
			<div id="bored" class="step slide" <?= $impress->shiftX(-1000)->shiftY(-1500) ?>>
				<q>Aren't you just <b>bored</b> with all those slides-based presentations?</q>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<q>Don't you think that presentations given <strong>in modern browsers</strong> shouldn't <strong>copy the limits</strong> of 'classic' slide decks?</q>
			</div>
			<div class="step slide" <?= $impress->shiftX(1000) ?>>
				<q>Would you like to <strong>impress your audience</strong> with <strong>stunning visualization</strong> of your talk?</q>
			</div>
			<div id="title" class="step" <?= $impress->shiftX(-1000)->shiftY(1500)->setScale(4) ?>>
				<span class="try">then you should try</span>
				<h1>impress.js<sup>*</sup></h1>
				<span class="footnote"><sup>*</sup> no rhyme intended</span>
			</div>
			<div id="its" class="step" <?= $impress->shiftX(850)->shiftY(3000)->rotateZ(90)->setScale(5) ?>>
				<p>It's a <strong>presentation tool</strong> <br/>
				inspired by the idea behind <a href="http://prezi.com">prezi.com</a> <br/>
				and based on the <strong>power of CSS3 transforms and transitions</strong> in modern browsers.</p>
			</div>
			<div id="big" class="step" <?= $impress->shiftX(2650)->shiftY(-900)->rotateZ(90)->setScale(6) ?>>
				<p>visualize your <b>big</b> <span class="thoughts">thoughts</span></p>
			</div>
			<div id="tiny" class="step" <?= $impress->shiftX(-175)->shiftY(225)->shiftZ(-3000)->rotateZ(120)->setScale(1) ?>>
				<p>and <b>tiny</b> ideas</p>
			</div>
			<div id="ing" class="step" <?= $impress->shiftZ(3000)->shiftY(-3175)->shiftX(175)->rotateZ(-30)->setScale(6) ?>>
				<p>by <b class="positioning">positioning</b>, <b class="rotating">rotating</b> and <b class="scaling">scaling</b> them on an infinite canvas</p>
			</div>
			<div id="imagination" class="step" <?= $impress->shiftX(3200)->shiftY(550)->setRotZ(0) ?>>
				<p>the only <b>limit</b> is your <b class="imagination">imagination</b></p>
			</div>
			<div id="source" class="step" <?= $impress->shiftX(-500)->shiftY(2300)->rotateZ(20)->setScale(4) ?>>
				<p>want to know more?</p>
				<q><a href="http://github.com/bartaz/impress.js">use the source</a>, Luke!</q>
			</div>
			<div id="source2" class="step" <?= $impress->moveRight(600) ?>>
				<p>want to know even more?</p>
				<q><a href="http://github.com/bartaz/impress.js">use the source</a>, Luke!</q>
			</div>
			<div id="one-more-thing" class="step" <?= $impress->shiftX(-200)->shiftY(2000)->rotateZ(-20)->setScale(2) ?>>
				<p>one more thing...</p>
			</div>
			<div id="its-in-3d" class="step" <?= $impress->shiftX(200)->shiftY(300)->shiftZ(-100)->rotateX(-40)->rotateY(10) ?>>
				<p><span class="have">have</span> <span class="you">you</span> <span class="noticed">noticed</span> <span class="its">it's</span> <span class="in">in</span> <b>3D<sup>*</sup></b>?</p>
				<span class="footnote">* beat that, prezi ;)</span>
			</div>
			<div id="overview" class="step" <?= $impress->setPosx(3000)->setPosY(1500)->setPosZ(0)->setScale(10)->resetRotation() ?>>
			</div>
			*/
?>
		</div>
		<script src="../assets/js/jquery-1.8.1.js"></script>
		<script src="../assets/js/bootstrap.js"></script>
		<script src="../assets/js/impress.js"></script>
		<script>impress().init();</script>
	</body>
</html>