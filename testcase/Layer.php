<?php
/** op-webpack-css:/testcase/Layer.php
 *
 * @created   2023-04-10
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
<h1>This is css layer test</h1>
<div>
    <p>This is css layer test</p>
</div>
<style>
/* Priority */
@layer reset, base, layout, unit;

/* Reset */
@layer reset {
    h1 {
        margin:  0;
        padding: 0;
        color: white;
        background-color: Black;
    }
}

/* Base */
@layer base {
    h1 {
        padding: 0.5em;
    }
}

/* Layout */
@layer layout {
    h1 {

    }
}

/* Unit */
@layer unit {
    h1 {
        color: #999;
    }
}
</style>
