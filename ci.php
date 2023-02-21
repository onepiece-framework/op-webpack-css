<?php
/** op-core:/ci.php
 *
 * @created    2023-01-01
 * @version    2.1
 * @package    op-core
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

 /** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP;

//	...
$php = $_SERVER['_'];

//	...
$argv1 = $_SERVER['argv'][1] ?? '';
$argv2 = $_SERVER['argv'][2] ?? '';
$argv3 = $_SERVER['argv'][3] ?? '';
$argv4 = $_SERVER['argv'][4] ?? '';
$argv5 = $_SERVER['argv'][5] ?? '';
echo `{$php} ../../../ci.php {$argv1} {$argv2} {$argv3} {$argv4} {$argv5}`;
