<?php

require_once('../shared/php/ImpressJS.php');

?>
<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=1024" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title>CSS Grundladen | Martin Gelder (Forumhome GmbH)</title>

	<meta name="description" content="" />
	<meta name="author" content="Martin Gelder" />

	<link href="../shared/style.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" />

	<link rel="shortcut icon" href="../shared/favicon.png" />
<link rel="apple-touch-icon" href="../shared/apple-touch-icon.png" />
</head>
<body class="impress-not-supported">

	<div id="impress" data-perspective="1000" data-transition-duration="1000">

	<div id="bored" class="step slide" data-x="0" data-y="-1500">
		<q>Aren't you just <b>bored</b> with all those slides-based presentations?</q>
	</div>

	<div id="dont-you-think" class="step slide" data-x="-0" data-y="-1500" data-z="-2000">
		<q>Don't you think that presentations given <strong>in modern browsers</strong> shouldn't <strong>copy the limits</strong> of 'classic' slide decks?</q>
	</div>

	<div id="would-you-like" class="step slide" data-x="0" data-y="-1500" data-z="-4000">
		<q>Would you like to <strong>impress your audience</strong> with <strong>stunning visualization</strong> of your talk?</q>
	</div>

    <!--

        This is an example of step element being scaled.

        Again, we use a `data-` attribute, this time it's `data-scale="4"`, so it means that this
        element will be 4 times larger than the others.
        From presentation and transitions point of view it means, that it will have to be scaled
        down (4 times) to make it back to it's correct size.

    -->
    <div id="title" class="step" data-x="0" data-y="0" data-scale="4">
        <span class="try">then you should try</span>
        <h1>impress.js<sup>*</sup></h1>
        <span class="footnote"><sup>*</sup> no rhyme intended</span>
    </div>

    <!--

        This element introduces rotation.

        Notation shouldn't be a surprise. We use `data-rotate="90"` attribute, meaning that this
        element should be rotated by 90 degrees clockwise.

    -->
    <div id="its" class="step" data-x="850" data-y="3000" data-rotate="90" data-scale="5">
        <p>It's a <strong>presentation tool</strong> <br/>
        inspired by the idea behind <a href="http://prezi.com">prezi.com</a> <br/>
        and based on the <strong>power of CSS3 transforms and transitions</strong> in modern browsers.</p>
    </div>

    <div id="big" class="step" data-x="3500" data-y="2100" data-rotate="180" data-scale="6">
        <p>visualize your <b>big</b> <span class="thoughts">thoughts</span></p>
    </div>

    <!--

        And now it gets really exiting! We move into third dimension!

        Along with `data-x` and `data-y`, you can define the position on third (Z) axis, with
        `data-z`. In the example below we use `data-z="-3000"` meaning that element should be
        positioned far away from us (by 3000px).

    -->
    <div id="tiny" class="step" data-x="2825" data-y="2325" data-z="-3000" data-rotate="300" data-scale="1">
        <p>and <b>tiny</b> ideas</p>
    </div>

    <!--

        This step here doesn't introduce anything new when it comes to data attributes, but you
        should notice in the demo that some words of this text are being animated.
        It's a very basic CSS transition that is applied to the elements when this step element is
        reached.

        At the very beginning of the presentation all step elements are given the class of `future`.
        It means that they haven't been visited yet.

        When the presentation moves to given step `future` is changed to `present` class name.
        That's how animation on this step works - text moves when the step has `present` class.

        Finally when the step is left the `present` class is removed from the element and `past`
        class is added.

        So basically every step element has one of three classes: `future`, `present` and `past`.
        Only one current step has the `present` class.

    -->
    <div id="ing" class="step" data-x="3500" data-y="-850" data-rotate="270" data-scale="6">
        <p>by <b class="positioning">positioning</b>, <b class="rotating">rotating</b> and <b class="scaling">scaling</b> them on an infinite canvas</p>
    </div>

    <div id="imagination" class="step" data-x="6700" data-y="-300" data-scale="6">
        <p>the only <b>limit</b> is your <b class="imagination">imagination</b></p>
    </div>

    <div id="source" class="step" data-x="6300" data-y="2000" data-rotate="20" data-scale="4">
        <p>want to know more?</p>
        <q><a href="http://github.com/bartaz/impress.js">use the source</a>, Luke!</q>
    </div>

    <div id="one-more-thing" class="step" data-x="6000" data-y="4000" data-scale="2">
        <p>one more thing...</p>
    </div>

    <!--

        And the last one shows full power and flexibility of impress.js.

        You can not only position element in 3D, but also rotate it around any axis.
        So this one here will get rotated by -40 degrees (40 degrees anticlockwise) around X axis and
        10 degrees (clockwise) around Y axis.

        You can of course rotate it around Z axis with `data-rotate-z` - it has exactly the same effect
        as `data-rotate` (these two are basically aliases).

    -->
    <div id="its-in-3d" class="step" data-x="6200" data-y="4300" data-z="-100" data-rotate-x="-40" data-rotate-y="10" data-scale="2">
        <p><span class="have">have</span> <span class="you">you</span> <span class="noticed">noticed</span> <span class="its">it's</span> <span class="in">in</span> <b>3D<sup>*</sup></b>?</p>
        <span class="footnote">* beat that, prezi ;)</span>
    </div>

    <!--

        So to make a summary of all the possible attributes used to position presentation steps, we have:

        * `data-x`, `data-y`, `data-z` - they define the position of **the center** of step element on
            the canvas in pixels; their default value is 0;
        * `data-rotate-x`, `data-rotate-y`, 'data-rotate-z`, `data-rotate` - they define the rotation of
            the element around given axis in degrees; their default value is 0; `data-rotate` and `data-rotate-z`
            are exactly the same;
        * `data-scale` - defines the scale of step element; default value is 1

        These values are used by impress.js in CSS transformation functions, so for more information consult
        CSS transfrom docs: https://developer.mozilla.org/en/CSS/transform

    -->
    <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
    </div>

</div>
<!--

    Last, but not least.

    To make all described above really work, you need to include impress.js in the page.
    I strongly encourage to minify it first.

    In here I just include full source of the script to make it more readable.

    You also need to call a `impress().init()` function to initialize impress.js presentation.
    And you should do it in the end of your document. Not only because it's a good practice, but also
    because it should be done when the whole document is ready.
    Of course you can wrap it in any kind of "DOM ready" event, but I was too lazy to do so ;)

-->
<script src="../../js/impress.js"></script>
<script>impress().init();</script>

<!--

    The `impress()` function also gives you access to the API that controls the presentation.

    Just store the result of the call:

        var api = impress();

    and you will get three functions you can call:

        `api.init()` - initializes the presentation,
        `api.next()` - moves to next step of the presentation,
        `api.prev()` - moves to previous step of the presentation,
        `api.goto( idx | id | element, [duration] )` - moves the presentation to the step given by its index number
                id or the DOM element; second parameter can be used to define duration of the transition in ms,
                but it's optional - if not provided default transition duration for the presentation will be used.

    You can also simply call `impress()` again to get the API, so `impress().next()` is also allowed.
    Don't worry, it wont initialize the presentation again.

    For some example uses of this API check the last part of the source of impress.js where the API
    is used in event handlers.

-->

</body>
</html>
