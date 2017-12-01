<?php
/**
 * op-skeleton-3:/html/css/op/action.php
 *
 * @creation  2017-06-29
 * @version   1.0
 * @package   op-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$extension = 'css';

//	...
$files = [];
$files[] = 'args';
$files[] = 'mark';
$files[] = 'dump';
$files[] = 'notice';

//	...
Webpack::Run(__DIR__, $files, $extension);
