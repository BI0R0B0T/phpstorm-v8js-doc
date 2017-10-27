<?php
/**
 * @author Dolgov_M <dolgov@bk.ru>
 * @date   27.10.2017 at 18:40
 *
 * @example
 *          PHP Version: 7.1.10
 *          V8  Version: 6.2.414.4
 *          Exception V8JsScriptException catch at First position.
 */
$JS = <<< EOT
this_function_does_not_exist();
EOT;
$catch = "Not catch!";
$e     = null;
$v8    = new V8Js();

echo 'PHP Version: '.PHP_VERSION.PHP_EOL;
echo 'V8  Version: '.$v8::V8_VERSION.PHP_EOL;
try {
    $v8->executeString($JS, 'exception.js');
} catch (V8JsScriptException $e) {
    $catch = 'First';
} catch (V8JsException $e) {
    $catch = 'Second';
} catch (Exception $e) {
    $catch = 'Third';
}
if($e) {
    echo "Exception ".get_class($e)." catch at $catch position.".PHP_EOL;
} else {
    echo $catch.PHP_EOL;
}