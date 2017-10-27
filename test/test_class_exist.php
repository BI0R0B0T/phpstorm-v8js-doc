<?php
/**
 * @author Dolgov_M <dolgov@bk.ru>
 * @date   27.10.2017 at 18:52
 *
 * @example
 *          PHP Version: 7.1.10
 *          V8  Version: 6.2.414.4
 *          Exception class name is V8JsException
 *          Exception class name is V8JsScriptException it          is instance of V8JsException.
 *          Exception class name is V8JsTimeLimitException it       is instance of V8JsException.
 *          Exception class name is V8JsMemoryLimitException it     is instance of V8JsException.
 */
echo 'PHP Version: '.PHP_VERSION.PHP_EOL;
echo 'V8  Version: '.V8Js::V8_VERSION.PHP_EOL;
try {
    throw new V8JsException;
} catch (Exception $e) {
    echo "Exception class name is ".get_class($e).PHP_EOL;
}
foreach (["V8JsScriptException", "V8JsTimeLimitException", "V8JsMemoryLimitException" ] as  $exceptionClass) {
    try {
        throw new $exceptionClass;
    } catch (Exception $e) {
        echo "Exception class name is ".get_class($e)." it  \t". ($e instanceof V8JsException ? "is " : "is not ")."instance of V8JsException.".PHP_EOL;
    }
}