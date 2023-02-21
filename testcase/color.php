<?php
/** op-webpack-css:/testcase/syntax.php
 *
 * @created   2023-02-03
 * @version   1.0
 * @package   op-webpack-css
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	Black to White
$colors1 = [
	'black',
	'gray',
	'silver',
	'ivory',
	'snow',
	'white',
];

//	Light
$colors2 = [
	'',
	'',
	'',
	'',
	'yellow',
	'lightgreen',
	'',
	'cyan',
	'',
	'',
	'',
	'lavender',
];

//	standard
$colors3 = [
	'red',
	'apple',
	'chocolate',
	'orange',
	'gold',
	'lime',
	'skyblue',
	'blue',
	'purple',
	'magenta',
	'rose',
	'plum',
	'violet',
	'pink',
];

//	Dark
$colors4 = [
	'',
	'scarlet',
	'brown',
	'copper',
	'olive',
	'green',
	'',
	'indigo',
];

?>
<style>
#colors table, tr, td {
	border: 1px solid #333;
}
#colors td {
	text-align: center;
}
</style>
<h1>Color table</h1>
<table id="colors">
	<!-- black to white -->
	<tr>
		<?php foreach($colors1 as $color): ?>
		<td class="color <?= $color ?>"><?= $color ?></td>
		<?php endforeach; ?>
	</tr>
	<!-- light -->
	<tr>
		<?php foreach($colors2 as $color): ?>
		<td class="color <?= $color ?>"><?= $color ?></td>
		<?php endforeach; ?>
	</tr>


	<!-- standard -->
	<tr>
		<?php foreach($colors3 as $color): ?>
		<td class="color <?= $color ?>"><?= $color ?></td>
		<?php endforeach; ?>
	</tr>

	<!-- dark -->
	<tr>
		<?php foreach($colors4 as $color): ?>
		<td class="color <?= $color ?>"><?= $color ?></td>
		<?php endforeach; ?>
	</tr>
</table>
<hr/>
