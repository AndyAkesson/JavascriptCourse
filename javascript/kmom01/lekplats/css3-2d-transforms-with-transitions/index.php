<?php $title='CSS3 2d transforms with transitions triggered by JavaScript and using LESS mixins'; include(__DIR__ . '/../mall/header.php'); ?>

<div id='flash'>
<h1>Anders Åkesson, <a href="http://andyweb.info">Andyweb</a></h1>
<p>Press the mouse button on the bad baddie to begin the action using CSS3 2D transforms (change form) and CSS3 transitions (animate change).</p>
<table>
<tr>
  <td>Rotate x 0.5:</td>
  <td>Rotate x 1.5:</td>
  <td>Half size:</td>
  <td>Double size:</td>
  <td>Skew horisontal:</td>
  <td>Skew vertical:</td>
  <td>Move:</td>
  <td>Move & Rotate:</td>
  <td>Saltomortal:</td>
</tr>
<tr>
  <td><div id='b1' class='baddie'></div></td>
  <td><div id='b2' class='baddie'></div></td>
  <td><div id='b3' class='baddie'></div></td>
  <td><div id='b4' class='baddie'></div></td>
  <td><div id='b5' class='baddie'></div></td>
  <td><div id='b6' class='baddie'></div></td>
  <td><div id='b7' class='baddie'></div></td>
  <td><div id='b8' class='baddie'></div></td>
  <td><div id='b9' class='baddie'></div></td>
</tr>
</table>

<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>