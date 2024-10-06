<?php
/** op-webpack-css:/testcase/screensize.php
 *
 * @created   2024-10-06
 * @version   1.0
 * @package   op-webpack-css
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

?>
<style>
@property --_w {
  syntax: '<length>';
  inherits: true;
  initial-value: 100vw;
}
@property --_h {
  syntax: '<length>';
  inherits: true;
  initial-value: 100vh;
}
:root {
  --w: tan(atan2(var(--_w),1px)); /* screen width */
  --h: tan(atan2(var(--_h),1px)); /* screen height*/
  /* The result is an integer without unit  */
}

#screensize:before {
  content: counter(w) "x" counter(h);
  counter-reset: h var(--h) w var(--w);
  font-size: 50px;
  font-family: system-ui,sans-serif;
  font-weight: 900;
  position: fixed;
  inset: 0;
  width: fit-content;
  height: fit-content;
  margin: auto;
}
</style>
<h1>Get the screen width &amp; height without JavaScript</h1>
<a href="https://css-tip.com/screen-dimension/">https://css-tip.com/screen-dimension/</a>
<div id="screensize"></div>
